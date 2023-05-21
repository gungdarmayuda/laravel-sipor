<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Rapor;
use App\Models\Student;
use App\Models\Pengesahan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class KonfirmasiController extends Controller
{
    public function student()
    {
        $studentList = Student::where('akun_id', auth()->user()->akun_id);
        return view('pengesahan.pengesahan', [
            "studentList"=>$studentList->filter()->get(),
        ]);

    }

    // index page student grid
    public function studentGrid()
    {
        $studentList = Student::where('user_id', auth()->user()->id);
        return view('lihat.student-gridlihat',[
            "studentList"=>$studentList->filter()->get(),
        ]);
    }

    /** view for edit student */
    public function studentEdit($id)
    {
        $studentEdit = Student::where('id',$id)->first();
        return view('lihat.edit-studentlihat',compact('studentEdit'));
    }

    public function studentPDF($no_induk, $nm_anak)
    {
        $data = Student::where('nm_anak',$nm_anak)->first();
        $pdf = Pdf::loadView('pdf.pdf',[
            'data'=>$data,
            // $request['user_id'] = auth()->user()->id,
        ]);
        $pdf->setPaper('Legal','potrait');

        return $pdf->stream($no_induk.'-'.$nm_anak.'.pdf');
    }

    /** update record */
    public function studentUpdate(Request $request)
    {
        DB::beginTransaction();
        try {

            $pengesahan = new Pengesahan;
                $pengesahan->refleksi_pertama    = $request->refleksi_pertama;
                $pengesahan->refleksi_kedua      = $request->refleksi_kedua;
                $pengesahan->refleksi_ketiga     = $request->refleksi_ketiga;
                $pengesahan->pengesahan_orangtua = '1';

                // $dt->toDayDateTimeString();

                $dt       = Carbon::now()->locale('id');
                $dt->settings(['formatFunction' => 'translatedFormat']);
                $todayDate =  $dt->format('l, j F Y ; h:i a');

            $updateRecord = [
                'refleksi_pertama'  => $pengesahan->refleksi_pertama,
                'refleksi_kedua'    => $pengesahan->refleksi_kedua,
                'refleksi_ketiga'   => $pengesahan->refleksi_ketiga,
                'pengesahan_orangtua' => $pengesahan->pengesahan_orangtua,
                'waktu_orangtua'    => $todayDate,
            ];
            Pengesahan::where('id',$request->id)->update($updateRecord);
            
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
