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

class QrguruController extends Controller
{
    public function qrGuru($name, $pengesahan_id)
    {
        $qrGuru = User::where('name',$name)->first();
        $qrPengesahan = Student::where('pengesahan_id',$pengesahan_id)->first();
        return view('qr.guru',
        [
            "qrGuru"=>$qrGuru,
            "qrPengesahan"=>$qrPengesahan,
        ]);
    }

    public function konfirmasiguru()
    {
        $guru_a = 'Guru TK A';
        $guru_a = User::where('role_name',$guru_a)->first();

        $guru_b = 'Guru TK B';
        $guru_b = User::where('role_name',$guru_b)->first();

        $kepala = 'Kepala Sekolah';
        $kepala = User::where('role_name',$kepala)->first();

        $send_a = '1';
        $send_a = Pengajuan::where('id',$send_a)->first();

        $send_b = '2';
        $send_b = Pengajuan::where('id',$send_b)->first();

        $indikator_a = '1';
        $indikator_a = Student::where('kelas_id', $indikator_a)->exists();

        $indikator_b = '2';
        $indikator_b = Student::where('kelas_id', $indikator_b)->exists();

        return view('guru.konfirmasi', [
            "guru_a"=>$guru_a,
            "guru_b"=>$guru_b,
            "send_a"=>$send_a,
            "send_b"=>$send_b,
            "kepala"=>$kepala,
            "indikator_a"=>$indikator_a,
            "indikator_b"=>$indikator_b,
        ]);
    }

    public function guruUpdate(Request $request)
    {
            DB::beginTransaction();
            try {
    
                    $pengesahan = new Pengesahan;
                    $pengesahan->pengesahan_guru = $request->pengesahan_guru;

                    $pengajuan = new Pengajuan;
                    $pengajuan->konfirmasi = '1';
    
                    // $dt->toDayDateTimeString();
    
                    $dt       = Carbon::now()->locale('id');
                    $dt->settings(['formatFunction' => 'translatedFormat']);
                    $todayDate =  $dt->format('l, j F Y ; h:i a');
    
                $updateRecord = [
                    'pengesahan_guru'=>$pengesahan->pengesahan_guru,
                    'waktu_guru'    => $todayDate,
                ];

                $update_pengajuanRecord = [
                    'konfirmasi'=>$pengajuan->konfirmasi,
                    'waktu'    => $todayDate,
                ];
                Pengesahan::where('kelas_id','1')->update($updateRecord);
                Pengajuan::where('id','1')->update($update_pengajuanRecord);
                
                Toastr::success('Has been update successfully :)','Success');
                DB::commit();
                return redirect()->back();
               
            } catch(\Exception $e) {
                DB::rollback();
                Toastr::error('fail, update student  :)','Error');
                return redirect()->back();
            }
    }

    public function guruduaUpdate(Request $request)
    {
            DB::beginTransaction();
            try {
    
                    $pengesahan = new Pengesahan;
                    $pengesahan->pengesahan_guru = $request->pengesahan_guru;

                    $pengajuan = new Pengajuan;
                    $pengajuan->konfirmasi = '1';
    
                    // $dt->toDayDateTimeString();
    
                    $dt       = Carbon::now()->locale('id');
                    $dt->settings(['formatFunction' => 'translatedFormat']);
                    $todayDate =  $dt->format('l, j F Y ; h:i a');
    
                $updateRecord = [
                    'pengesahan_guru'=>$pengesahan->pengesahan_guru,
                    'waktu_guru' => $todayDate,
                ];

                $update_pengajuanRecord = [
                    'konfirmasi'=>$pengajuan->konfirmasi,
                    'waktu'    => $todayDate,
                ];
                Pengesahan::where('kelas_id','2')->update($updateRecord);
                Pengajuan::where('id','2')->update($update_pengajuanRecord);

                Toastr::success('Has been update successfully :)','Success');
                DB::commit();
                return redirect()->back();
               
            } catch(\Exception $e) {
                DB::rollback();
                Toastr::error('fail, update student  :)','Error');
                return redirect()->back();
            }
    }

    public function resetUpdate(Request $request)
    {
            DB::beginTransaction();
            try {
    
                    $pengesahan = new Pengesahan;
                    $pengesahan->pengesahan_guru = $request->pengesahan;
                    $pengesahan->waktu_guru = '-';
                    $pengesahan->pengesahan_kepsek = $request->pengesahan;
                    $pengesahan->waktu_kepsek = '-';
                    $pengesahan->pengesahan_orangtua = $request->pengesahan;
                    $pengesahan->waktu_orangtua = '-';
                    $pengesahan->refleksi_pertama = null;
                    $pengesahan->refleksi_kedua = null;
                    $pengesahan->refleksi_ketiga = null;
                    $pengesahan->expire_date = '0';

                    $pengajuan = new Pengajuan;
                    $pengajuan->konfirmasi = $request->pengesahan;
                    $pengajuan->waktu = '-';
    
    
                $updateRecord = [
                    'pengesahan_guru'=>$pengesahan->pengesahan_guru,
                    'waktu_guru'    => $pengesahan->waktu_guru,
                    'pengesahan_kepsek'=>$pengesahan->pengesahan_kepsek,
                    'waktu_kepsek'    => $pengesahan->waktu_kepsek,
                    'pengesahan_orangtua'=>$pengesahan->pengesahan_orangtua,
                    'waktu_orangtua'    => $pengesahan->waktu_orangtua,
                    'refleksi_pertama' => $pengesahan->refleksi_pertama,
                    'refleksi_kedua' => $pengesahan->refleksi_kedua,
                    'refleksi_ketiga' => $pengesahan->refleksi_ketiga,
                    'expire_date'   => $pengesahan->expire_date,
                ];

                $update_pengajuanRecord = [
                    'konfirmasi'=>$pengajuan->konfirmasi,
                    'waktu'    => $pengajuan->waktu,
                ];
                Pengesahan::where('kelas_id','1')->update($updateRecord);
                Pengajuan::where('id','1')->update($update_pengajuanRecord);
                
                Toastr::success('Has been update successfully :)','Success');
                DB::commit();
                return redirect()->back();
               
            } catch(\Exception $e) {
                DB::rollback();
                Toastr::error('fail, update student  :)','Error');
                return redirect()->back();
            }
    }

    public function resetduaUpdate(Request $request)
    {
            DB::beginTransaction();
            try {
    
                    $pengesahan = new Pengesahan;
                    $pengesahan->pengesahan_guru = $request->pengesahan;
                    $pengesahan->waktu_guru = '-';
                    $pengesahan->pengesahan_kepsek = $request->pengesahan;
                    $pengesahan->waktu_kepsek = '-';
                    $pengesahan->pengesahan_orangtua = $request->pengesahan;
                    $pengesahan->waktu_orangtua = '-';
                    $pengesahan->refleksi_pertama = null;
                    $pengesahan->refleksi_kedua = null;
                    $pengesahan->refleksi_ketiga = null;
                    $pengesahan->expire_date = '0';

                    $pengajuan = new Pengajuan;
                    $pengajuan->konfirmasi = $request->pengesahan;
                    $pengajuan->waktu = '-';
    
    
                $updateRecord = [
                    'pengesahan_guru'=>$pengesahan->pengesahan_guru,
                    'waktu_guru'    => $pengesahan->waktu_guru,
                    'pengesahan_kepsek'=>$pengesahan->pengesahan_kepsek,
                    'waktu_kepsek'    => $pengesahan->waktu_kepsek,
                    'pengesahan_orangtua'=>$pengesahan->pengesahan_orangtua,
                    'waktu_orangtua'    => $pengesahan->waktu_orangtua,
                    'refleksi_pertama' => $pengesahan->refleksi_pertama,
                    'refleksi_kedua' => $pengesahan->refleksi_kedua,
                    'refleksi_ketiga' => $pengesahan->refleksi_ketiga,
                    'expire_date'   => $pengesahan->expire_date,
                ];

                $update_pengajuanRecord = [
                    'konfirmasi'=>$pengajuan->konfirmasi,
                    'waktu'    => $pengajuan->waktu,
                ];
                Pengesahan::where('kelas_id','2')->update($updateRecord);
                Pengajuan::where('id','2')->update($update_pengajuanRecord);
                
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