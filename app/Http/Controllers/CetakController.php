<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Rapor;
use App\Models\Student;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;


class CetakController extends Controller
{
    public function student()
    {
        $studentList = Student::where('user_id', auth()->user()->id);
        return view('cetak.cetak', [
            "studentList"=>$studentList->filter()->get(),
        ]);

    }

    // index page student grid
    public function studentGrid()
    {
        $studentList = Student::where('user_id', auth()->user()->id);
        return view('cetak.student-gridcetak',[
            "studentList"=>$studentList->filter()->get(),
        ]);
    }

    /** view for edit student */
    public function studentEdit($id)
    {
        $studentEdit = Student::where('id',$id)->first();
        return view('cetak.edit-studentcetak',compact('studentEdit'));
    }

    public function studentPDF($no_induk, $nm_anak)
    {
        $data = Student::where('nm_anak',$nm_anak)->first();

        $qrKepala = 'Kepala Sekolah';
        $qrKepala = User::where('role_name',$qrKepala)->first();

        $pdf = Pdf::loadView('pdf.pdf',[
            'data'=>$data,
            "qrKepala"=>$qrKepala,
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

            $rapor = new Rapor;
                $rapor->sakit       = $request->sakit;
                $rapor->ijin        = $request->ijin;
                $rapor->tanpa_ket   = $request->tanpa_ket;

            $updateRecord = [
                'sakit'           => $rapor->sakit,
                'ijin'            => $rapor->ijin,
                'tanpa_ket'       => $rapor->tanpa_ket,
            ];
            Rapor::where('id',$request->id)->update($updateRecord);
            
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
