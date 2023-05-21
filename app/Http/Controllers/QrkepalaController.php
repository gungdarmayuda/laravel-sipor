<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Rapor;
use App\Models\Student;
use App\Models\Pengajuan;
use App\Models\Pengesahan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class QrkepalaController extends Controller
{
    public function qrKepala($name, $pengesahan_id)
    {
        // $qrGuru = User::where('name',$name)->first();

        $qrKepala = 'Kepala Sekolah';
        $qrKepala = User::where('role_name',$qrKepala)->first();

        $qrPengesahan = Student::where('pengesahan_id',$pengesahan_id)->first();
        return view('qr.kepala',
        [
            "qrKepala"=>$qrKepala,
            "qrPengesahan"=>$qrPengesahan,
        ]);
    }

        // index page student list
        public function student_a()
        {
            $studentList = Student::where('kelas_id', '1');
            return view('kepala.murid_a', [
                "studentList"=>$studentList->filter()->get(),
            ]);
    
        }
    
        // index page student grid
        public function studentGrid_a()
        {
            $studentList = Student::where('kelas_id', '1');
            return view('kepala.grid_a',[
                "studentList"=>$studentList->filter()->get(),
            ]);
        }

        public function student_b()
        {
            $studentList = Student::where('kelas_id', '2');
            return view('kepala.murid_b', [
                "studentList"=>$studentList->filter()->get(),
            ]);
    
        }
    
        // index page student grid
        public function studentGrid_b()
        {
            $studentList = Student::where('kelas_id', '2');
            return view('kepala.grid_b',[
                "studentList"=>$studentList->filter()->get(),
            ]);
        }

        public function konfirmasikepala()
        {
            $guru_a = 'Guru TK A';
            $guru_a = User::where('role_name',$guru_a)->first();

            $guru_b = 'Guru TK B';
            $guru_b = User::where('role_name',$guru_b)->first();

            $data_a = 'A';
            $data_a = Pengajuan::where('guru',$data_a)->first();

            $data_b = 'B';
            $data_b = Pengajuan::where('guru',$data_b)->first();

            $indikator_a = '1';
            $indikator_a = Pengesahan::where('kelas_id','1')->where('pengesahan_kepsek',$indikator_a)->exists();

            $indikator_b = '1';
            $indikator_b = Pengesahan::where('kelas_id','2')->where('pengesahan_kepsek',$indikator_b)->exists();

            return view('kepala.konfirmasi', [
                "guru_a"=>$guru_a,
                "guru_b"=>$guru_b,
                "data_a"=>$data_a,
                "data_b"=>$data_b,
                "indikator_a"=>$indikator_a,
                "indikator_b"=>$indikator_b,
            ]);
        }

        public function kepalaUpdate(Request $request)
        {
                DB::beginTransaction();
                try {
        
                        $pengesahan = new Pengesahan;
                        $pengesahan->pengesahan_kepsek = $request->pengesahan_kepsek;
        
                        // $dt->toDayDateTimeString();
        
                        $dt       = Carbon::now()->locale('id');
                        $dt->settings(['formatFunction' => 'translatedFormat']);
                        $todayDate =  $dt->format('l, j F Y ; h:i a');

                        $is_expired = $dt->addMonth();
        
                    $updateRecord = [
                        'pengesahan_kepsek'=>$pengesahan->pengesahan_kepsek,
                        'waktu_kepsek'    => $todayDate,
                        'expire_date' => $is_expired,
                    ];

                    Pengesahan::where('kelas_id','1')->update($updateRecord);
                    
                    Toastr::success('Has been update successfully :)','Success');
                    DB::commit();
                    return redirect()->back();
                   
                } catch(\Exception $e) {
                    DB::rollback();
                    Toastr::error('fail, update student  :)','Error');
                    return redirect()->back();
                }
        }

        public function kepaladuaUpdate(Request $request)
        {
                DB::beginTransaction();
                try {
        
                        $pengesahan = new Pengesahan;
                        $pengesahan->pengesahan_kepsek = $request->pengesahan_kepsek;
        
                        // $dt->toDayDateTimeString();
        
                        $dt       = Carbon::now()->locale('id');
                        $dt->settings(['formatFunction' => 'translatedFormat']);
                        $todayDate =  $dt->format('l, j F Y ; h:i a');

                        $is_expired = $dt->addMonth();
        
                    $updateRecord = [
                        'pengesahan_kepsek'=>$pengesahan->pengesahan_kepsek,
                        'waktu_kepsek' => $todayDate,
                        'expire_date' => $is_expired,
                    ];
                    Pengesahan::where('kelas_id','2')->update($updateRecord);
                    
                    Toastr::success('Has been update successfully :)','Success');
                    DB::commit();
                    return redirect()->back();
                   
                } catch(\Exception $e) {
                    DB::rollback();
                    Toastr::error('fail, update student  :)','Error');
                    return redirect()->back();
                }
        }
}
