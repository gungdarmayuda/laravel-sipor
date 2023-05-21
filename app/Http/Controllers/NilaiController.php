<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class NilaiController extends Controller
{
    public function student()
    {
        $studentList = Student::where('user_id', auth()->user()->id);
        return view('nilai.nilai', [
            "studentList"=>$studentList->filter()->get(),
        ]);

    }

    // index page student grid
    public function studentGrid()
    {
        $studentList = Student::where('user_id', auth()->user()->id);
        return view('nilai.student-gridnilai',[
            "studentList"=>$studentList->filter()->get(),
        ]);
    }

    /** view for edit student */
    public function studentEdit($id)
    {
        $studentEdit = Student::where('id',$id)->first();
        return view('nilai.edit-studentnilai',compact('studentEdit'));
    }

    /** update record */
    public function studentUpdate(Request $request)
    {
        DB::beginTransaction();
        try {

            $nilai = new Nilai;
                $nilai->nilai_pertama = $request->nilai_pertama;
                $nilai->nilai_kedua   = $request->nilai_kedua;
                $nilai->nilai_ketiga  = $request->nilai_ketiga;
                $nilai->nilai_keempat = $request->nilai_keempat;

            $updateRecord = [
                'nilai_pertama'      => $nilai->nilai_pertama,
                'nilai_kedua'        => $nilai->nilai_kedua,
                'nilai_ketiga'       => $nilai->nilai_ketiga,
                'nilai_keempat'      => $nilai->nilai_keempat,
            ];
            Nilai::where('id',$request->id)->update($updateRecord);
            
            Toastr::success('Has been update successfully :)','Success');
            DB::commit();
            return redirect()->back();
           
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('fail, update student  :)','Error');
            return redirect()->back();
        }
    }

    /** student delete */
    public function studentDelete(Request $request)
    {
        DB::beginTransaction();
        try {
           
            if (!empty($request->id)) {
                Student::destroy($request->id);
                unlink(storage_path('app/public/student-photos/'.$request->avatar));
                DB::commit();
                Toastr::success('Student deleted successfully :)','Success');
                return redirect()->back();
            }
    
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Student deleted fail :)','Error');
            return redirect()->back();
        }
    }
}
