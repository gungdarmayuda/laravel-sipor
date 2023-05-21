<?php

namespace App\Http\Controllers;

use Hash;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Nilai;
use App\Models\Rapor;
use App\Models\Student;
use Illuminate\Http\File;
use App\Models\Pengesahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class StudentController extends Controller
{
    // index page student list
    public function student()
    {
        $studentList = Student::where('user_id', auth()->user()->id);
        return view('student.student', [
            "studentList"=>$studentList->filter()->get(),
        ]);

    }

    // index page student grid
    public function studentGrid()
    {
        $studentList = Student::where('user_id', auth()->user()->id);
        return view('student.student-grid',[
            "studentList"=>$studentList->filter()->get(),
        ]);
    }

    // student add page
    public function studentAdd()
    {
        return view('student.add-student');
    }
    
    /** student save record */
    public function studentSave(Request $request)
    {
        $request->validate([
            'tahun_id'      => 'required|string',
            'kelas_id'      => 'required|string',
            'semester_id'      => 'required|string',
            'no_induk'      => 'required|string|max:20',
            'nstk'          => 'required|string|max:12',
            'nik'           => 'required|string|max:16',
            'npsn'          => 'required|string|max:8',
            'nm_anak'       => 'required|string',
            'tmpt_lahir'    => 'required|string',
            'tgl_lahir'     => 'required|string',
            'jns_kelamin'   => 'required|not_in:0',
            'agama'         => 'required|string',
            'almt_anak'     => 'required|string',
            'nm_ayah'       => 'required|string',
            'pkrjn_ayah'    => 'required|string',
            'almt_ayah'     => 'required|string',
            'nohp_ayah'     => 'required',
            'nm_ibu'        => 'required|string',
            'pkrjn_ibu'     => 'required|string',
            'almt_ibu'      => 'required|string',
            'nohp_ibu'      => 'required',
            'umur'          => 'required|string',
            'tinggi_bd'     => 'required|string',
            'berat_bd'      => 'required|string',
            'lingkar_kpl'   => 'required|string',
            'ket'           => 'required|string',
            'email'         => 'required|email',
            'upload'        => 'required|image',
        ]);

        $request['user_id'] = auth()->user()->id;
        
        DB::beginTransaction();
        try {
           
            $upload_file = rand() . '.' . $request->upload->extension();
            $request->upload->move(storage_path('app/public/student-photos/'), $upload_file);

            // $image = (QrCode::format('png')
            //     ->merge(public_path('logo.png'),0.2, true)
            //     ->errorCorrection('H')
            //     ->size(200)
            //     ->generate('https://www.google.com/'));
            
            // $output_file = 'public/student-qr/img-'.rand() . '.png';
            // Storage::disk('local')->put($output_file, $image);

            //$output_file = Storage::putFile('photos', new File('/public/student-qr'));

            if(!empty($request->upload)) {
                $student = new Student;
                $student->user_id      = $request->user_id;
                $student->tahun_id      = $request->tahun_id;
                $student->semester_id   = $request->semester_id;
                $student->kelas_id      = $request->kelas_id;
                $student->no_induk      = $request->no_induk;
                $student->nstk          = $request->nstk;
                $student->nik           = $request->nik;
                $student->npsn          = $request->npsn;
                $student->nm_anak       = $request->nm_anak;
                $student->tmpt_lahir    = $request->tmpt_lahir;
                $student->tgl_lahir     = $request->tgl_lahir;
                $student->jns_kelamin   = $request->jns_kelamin;
                $student->agama         = $request->agama;
                $student->almt_anak     = $request->almt_anak;
                $student->nm_ayah       = $request->nm_ayah;
                $student->pkrjn_ayah    = $request->pkrjn_ayah;
                $student->almt_ayah     = $request->almt_ayah;
                $student->nohp_ayah     = $request->nohp_ayah;
                $student->nm_ibu        = $request->nm_ibu;
                $student->pkrjn_ibu     = $request->pkrjn_ibu;
                $student->almt_ibu      = $request->almt_ibu;
                $student->nohp_ibu      = $request->nohp_ibu;
                $student->umur          = $request->umur;
                $student->tinggi_bd     = $request->tinggi_bd;
                $student->berat_bd      = $request->berat_bd;
                $student->lingkar_kpl   = $request->lingkar_kpl;
                $student->ket           = $request->ket;
                $student->email         = $request->email;
                // $student->qr_mrd        = $output_file;
                $student->upload        = $upload_file;
                $student->save();

                $nilai = new Nilai;
                $nilai->id = $student->id;
                $nilai->save();

                $rapor = new Rapor;
                $rapor->id = $student->id;
                $rapor->sakit = '-';
                $rapor->ijin = '-';
                $rapor->tanpa_ket = '-';
                $rapor->save();

                $pengesahan = new Pengesahan;
                $pengesahan->id = $student->id;
                $pengesahan->kelas_id = $request->kelas_id;
                $pengesahan->pengesahan_guru = '0';
                $pengesahan->waktu_guru = '-';
                $pengesahan->pengesahan_kepsek = '0';
                $pengesahan->waktu_kepsek = '-';
                $pengesahan->pengesahan_orangtua = '0';
                $pengesahan->waktu_orangtua = '-';
                $pengesahan->expire_date = '0';
                $pengesahan->save();

                $student->nilai_id = $nilai->id;
                $student->rapor_id = $rapor->id;
                $student->akun_id = $student->id;
                $student->pengesahan_id = $student->id;
                $student->save();

                // $dt       = Carbon::now();
                // $todayDate = $dt->toDayDateTimeString();

                $dt       = Carbon::now()->locale('id');
                $dt->settings(['formatFunction' => 'translatedFormat']);;
                $todayDate =  $dt->format('l, j F Y, h:i A');
                
                User::create([
                    'name'      => $student->nm_anak,
                    'akun_id'   => $student->id,
                    'avatar'    => $student->upload,
                    'email'     => $student->email,
                    'join_date' => $todayDate,
                    'role_name' => 'Orang Tua Murid',
                    'password'  => Hash::make('dharmapatni2023'),
                ]);

                Toastr::success('Has been add successfully :)','Success');
                DB::commit();
            }

            return redirect()->back();
           
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('fail, Add new student  :)','Error');
            return redirect()->back();
        }
    }

    /** view for edit student */
    public function studentEdit($id)
    {
        $studentEdit = Student::where('id',$id)->first();
        return view('student.edit-student',compact('studentEdit'));
    }

    /** update record */
    public function studentUpdate(Request $request)
    {
        DB::beginTransaction();
        try {

            if (!empty($request->upload)) {
                
                unlink(storage_path('app/public/student-photos/'.$request->image_hidden));
                $upload_file = rand() . '.' . $request->upload->extension();
                $request->upload->move(storage_path('app/public/student-photos/'), $upload_file);
                
            } else {
                $upload_file = $request->image_hidden;
            }

            $request['user_id'] = auth()->user()->id;

            $student = new Student;
                $student->user_id      = $request->user_id;
                $student->tahun_id      = $request->tahun_id;
                $student->semester_id   = $request->semester_id;
                $student->kelas_id      = $request->kelas_id;
                $student->no_induk      = $request->no_induk;
                $student->nstk          = $request->nstk;
                $student->nik           = $request->nik;
                $student->npsn          = $request->npsn;
                $student->nm_anak       = $request->nm_anak;
                $student->tmpt_lahir    = $request->tmpt_lahir;
                $student->tgl_lahir     = $request->tgl_lahir;
                $student->jns_kelamin   = $request->jns_kelamin;
                $student->agama         = $request->agama;
                $student->almt_anak     = $request->almt_anak;
                $student->nm_ayah       = $request->nm_ayah;
                $student->pkrjn_ayah    = $request->pkrjn_ayah;
                $student->almt_ayah     = $request->almt_ayah;
                $student->nohp_ayah     = $request->nohp_ayah;
                $student->nm_ibu        = $request->nm_ibu;
                $student->pkrjn_ibu     = $request->pkrjn_ibu;
                $student->almt_ibu      = $request->almt_ibu;
                $student->nohp_ibu      = $request->nohp_ibu;
                $student->umur          = $request->umur;
                $student->tinggi_bd     = $request->tinggi_bd;
                $student->berat_bd      = $request->berat_bd;
                $student->lingkar_kpl   = $request->lingkar_kpl;
                $student->ket           = $request->ket;
                $student->email         = $request->email;

            $updateRecord = [
                'user_id'      => $student->user_id,
                'tahun_id'      => $student->tahun_id,
                'semester_id'   => $student->semester_id,
                'kelas_id'      => $student->kelas_id,
                'no_induk'      => $student->no_induk,
                'nstk'          => $student->nstk,
                'nik'           => $student->nik,
                'npsn'          => $student->npsn,
                'nm_anak'       => $student->nm_anak,
                'tmpt_lahir'    => $student->tmpt_lahir,
                'tgl_lahir'     => $student->tgl_lahir,
                'jns_kelamin'   => $student->jns_kelamin,
                'agama'         => $student->agama,
                'almt_anak'     => $student->almt_anak,
                'nm_ayah'       => $student->nm_ayah,
                'pkrjn_ayah'    => $student->pkrjn_ayah,
                'almt_ayah'     => $student->almt_ayah,
                'nohp_ayah'     => $student->nohp_ayah,
                'nm_ibu'        => $student->nm_ibu,
                'pkrjn_ibu'     => $student->pkrjn_ibu,
                'almt_ibu'      => $student->almt_ibu,
                'nohp_ibu'      => $student->nohp_ibu,
                'umur'          => $student->umur,
                'tinggi_bd'     => $student->tinggi_bd,
                'berat_bd'      => $student->berat_bd,
                'lingkar_kpl'   => $student->lingkar_kpl,
                'ket'           => $student->ket,
                'email'         => $student->email,
                'upload' => $upload_file,
            ];

            $updateRecordDua = [
                'name'       => $student->nm_anak,
                'email'         => $student->email,
                'avatar'    => $upload_file,
            ];
            Student::where('id',$request->id)->update($updateRecord);
            User::where('akun_id',$request->id)->update($updateRecordDua);
            
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
                Nilai::destroy($request->id);
                Rapor::destroy($request->id);
                Pengesahan::destroy($request->id);

                $collection = User::where('akun_id', $request->id)->get(['id']);
                User::destroy($collection->toArray()); 

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

    /** student profile page */
    public function studentProfile($id)
    {
        $studentProfile = Student::where('id',$id)->first();
        return view('student.student-profile',compact('studentProfile'));
    }
}
