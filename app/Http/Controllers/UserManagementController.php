<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use Session;
use Carbon\Carbon;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use App\Rules\MatchOldPassword;


class UserManagementController extends Controller
{
    // index page
    public function index()
    {
        $users = User::all();
        return view('usermanagement.list_users',compact('users'));
    }

    /** user view */
    public function userView($id)
    {
        $users = User::where('user_id',$id)->first();
        return view('usermanagement.user_update',compact('users'));
    }

    public function userAdd()
    {
        $role = DB::table('role_type_users')->get();
        return view('usermanagement.user_add',compact('role'));
    }

    /** user Update */
    public function userUpdate(Request $request)
    {
        DB::beginTransaction();
        try {
                if (Session::get('role_name') === 'Admin')
                {
                    $user_id       = $request->user_id;
                    $name         = $request->name;
                    $email        = $request->email;
                    $role_name    = $request->role_name;
                    $phone        = $request->phone_number;
                    $status       = $request->status;
    
                    $image_name = $request->hidden_avatar;
                    $image = $request->file('avatar');
    
                    if($image_name =='photo_defaults.jpg') {
                        if ($image != '') {
                            $image_name = rand() . '.' . $image->getClientOriginalExtension();
                            $image->move(storage_path('app/public/student-photos/'), $image_name);
                        }
                    } else {
                        
                        if($image != '') {
                            unlink(storage_path('app/public/student-photos/'.$image_name));
                            $image_name = rand() . '.' . $image->extension();
                            $image->move(storage_path('app/public/student-photos/'), $image_name);
                        }
                    }
                
                    $update = [
                        'user_id'      => $user_id,
                        'name'         => $name,
                        'role_name'    => $role_name,
                        'email'        => $email,
                        'phone_number' => $phone,
                        'status'       => $status,
                        'avatar'       => $image_name,
                    ];
    
                    User::where('user_id',$request->user_id)->update($update);
                } else {
                    Toastr::error('User update fail :)','Error');
                }
                DB::commit();
                Toastr::success('User updated successfully :)','Success');
                return redirect()->back();
    
            } catch(\Exception $e){
                DB::rollback();
                Toastr::error('User update fail :)','Error');
                return redirect()->back();
            }
    }

    /** user delete */
    public function userDelete(Request $request)
    {
        DB::beginTransaction();
        try {
            if (Session::get('role_name') === 'Admin')
            {
                if ($request->avatar =='photo_defaults.jpg')
                {
                    User::destroy($request->user_id);
                } else {
                    User::destroy($request->user_id);
                    unlink(storage_path('app/public/student-photos/'.$request->avatar));
                }
            } else {
                Toastr::error('User deleted fail :)','Error');
            }

            DB::commit();
            Toastr::success('User deleted successfully :)','Success');
            return redirect()->back();
    
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('User deleted fail :)','Error');
            return redirect()->back();
        }
    }

    /** change password */
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password'     => ['required', new MatchOldPassword],
            'new_password'         => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        DB::commit();
        Toastr::success('User change successfully :)','Success');
        return redirect()->intended('home');
    }
}
