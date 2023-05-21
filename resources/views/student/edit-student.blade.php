
@extends('layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">Edit Murid</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('student/add/page') }}">Edit Murid</a></li>
                                <li class="breadcrumb-item active">Murid</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            {{-- message --}}
            {!! Toastr::message() !!}
            <div class="row">
                <div class="col-sm-12">
                    <div class="card comman-shadow">
                        <div class="card-body">
                            <form action="{{ route('student/update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" name="id" value="{{ $studentEdit->id }}" readonly>
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title student-info">Informasi Murid
                                        </h5>
                                    </div>
                                    <div class="col-12 col-sm-2">
                                        <div class="form-group local-forms">
                                            <label>Tahun Ajaran<span class="login-danger">*</span></label>
                                            <select class="form-control select @error('tahun_id') is-invalid @enderror" name="tahun_id">
                                                <option value="1" {{ old('tahun_id') == '1' ? "selected" :""}}>2022/2023</option>
                                            </select>
                                            @error('tahun_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-2">
                                        <div class="form-group local-forms">
                                            <label>Semester<span class="login-danger">*</span></label>
                                            <select class="form-control select @error('semester_id') is-invalid @enderror" name="semester_id">
                                                <option value="1" {{ old('semester_id') == '1' ? "selected" :""}}>I/Satu</option>
                                            </select>
                                            @error('semester_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    @if (Session::get('role_name') === 'Guru TK A')
                                    <div class="col-12 col-sm-2">
                                        <div class="form-group local-forms">
                                            <label>Kelas<span class="login-danger">*</span></label>
                                            <select class="form-control select @error('kelas_id') is-invalid @enderror" name="kelas_id">
                                                <option value="1" {{ old('kelas_id') == '1' ? "selected" :""}}>TK A</option>
                                            </select>
                                            @error('kelas_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    @endif
                                    @if (Session::get('role_name') === 'Guru TK B')
                                    <div class="col-12 col-sm-2">
                                        <div class="form-group local-forms">
                                            <label>Kelas<span class="login-danger">*</span></label>
                                            <select class="form-control select @error('kelas_id') is-invalid @enderror" name="kelas_id">
                                                <option value="2" {{ old('kelas_id') == '2' ? "selected" :""}}>TK B</option>
                                            </select>
                                            @error('kelas_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    @endif
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group local-forms">
                                            <label>No.Induk<span class="login-danger">*</span></label>
                                            <input type="text" class="form-control @error('no_induk') is-invalid @enderror" name="no_induk" placeholder="Enter No.Induk" value="{{ $studentEdit->no_induk }}">
                                            @error('no_induk')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>NSTK<span class="login-danger">*</span></label>
                                            <input type="text" class="form-control @error('nstk') is-invalid @enderror" name="nstk" placeholder="Enter NSTK" value="{{ $studentEdit->nstk }}">
                                            @error('nstk')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>NIK<span class="login-danger">*</span></label>
                                            <input type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" placeholder="Enter NIK" value="{{ $studentEdit->nik }}">
                                            @error('nik')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>NPSN<span class="login-danger">*</span></label>
                                            <input type="text" class="form-control @error('npsn') is-invalid @enderror" name="npsn" placeholder="Enter NPSN" value="{{ $studentEdit->npsn }}">
                                            @error('npsn')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8">
                                        <div class="form-group local-forms">
                                            <label>Nama Murid<span class="login-danger">*</span></label>
                                            <input type="text" class="form-control @error('nm_anak') is-invalid @enderror" name="nm_anak" placeholder="Enter Nama Murid" value="{{ $studentEdit->nm_anak }}">
                                            @error('nm_anak')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Tempat Lahir <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control @error('tmpt_lahir') is-invalid @enderror" name="tmpt_lahir" placeholder="Enter Tempat Lahir" value="{{ $studentEdit->tmpt_lahir }}">
                                            @error('tmpt_lahir')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms calendar-icon">
                                            <label>Tanggal Lahir <span class="login-danger">*</span></label>
                                            <input class="form-control datetimepicker @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir" type="text" placeholder="DD-MM-YYYY" value="{{ $studentEdit->tgl_lahir }}">
                                            @error('tgl_lahir')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Jenis Kelamin <span class="login-danger">*</span></label>
                                            <select class="form-control select  @error('jns_kelamin') is-invalid @enderror" name="jns_kelamin">
                                                <option selected disabled>Select Gender</option>
                                                <option value="Laki-laki" {{ $studentEdit->jns_kelamin == 'Laki-laki' ? "selected" :"Laki-laki"}}>Laki-laki</option>
                                                <option value="Perempuan" {{ $studentEdit->jns_kelamin == 'Perempuan' ? "selected" :"Perempuan"}}>Perempuan</option>
                                            </select>
                                            @error('jns_kelamin')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Agama <span class="login-danger">*</span></label>
                                            <select class="form-control select @error('agama') is-invalid @enderror" name="agama">
                                                <option selected disabled>Please Select Group </option>
                                                <option value="Hindu" {{ $studentEdit->agama == 'Hindu' ? "selected" :"Hindu"}}>Hindu</option>
                                                <option value="Islam" {{ $studentEdit->agama == 'Islam' ? "selected" :"Islam"}}>Islam</option>
                                                <option value="Kristen" {{ $studentEdit->agama == 'Kristen' ? "selected" :"Kristen"}}>Kristen</option>
                                                <option value="Budha" {{ $studentEdit->agama == 'Budha' ? "selected" :"Budha"}}>Budha</option>
                                                <option value="Konghucu" {{ $studentEdit->agama == 'Konghucu' ? "selected" :"Konghucu"}}>Konghucu</option>
                                            </select>
                                            @error('agama')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Alamat Anak <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control @error('almt_anak') is-invalid @enderror" name="almt_anak" placeholder="Enter Alamat Anak" value="{{ $studentEdit->almt_anak }}">
                                            @error('almt_anak')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Nama Ayah/Wali <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control @error('nm_ayah') is-invalid @enderror" name="nm_ayah" placeholder="Enter Nama Ayah/Wali" value="{{ $studentEdit->nm_ayah }}">
                                            @error('nm_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Pekerjaan Ayah/Wali<span class="login-danger">*</span></label>
                                            <input type="text" class="form-control @error('pkrjn_ayah') is-invalid @enderror" name="pkrjn_ayah" placeholder="Enter Pekerjaan Ayah/Wali" value="{{ $studentEdit->pkrjn_ayah }}">
                                            @error('pkrjn_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Alamat Ayah/Wali <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control @error('almt_ayah') is-invalid @enderror" name="almt_ayah" placeholder="Enter Alamat Ayah/Wali" value="{{ $studentEdit->almt_ayah }}">
                                            @error('almt_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>No.HP Ayah/Wali <span class="login-danger">*</span></label>
                                            <input class="form-control @error('nohp_ayah') is-invalid @enderror" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" name="nohp_ayah" placeholder="Enter No.HP Ayah/Wali" value="{{ $studentEdit->nohp_ayah }}">
                                            @error('nohp_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Nama Ibu/Wali <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control @error('nm_ibu') is-invalid @enderror" name="nm_ibu" placeholder="Enter Nama Ibu/Wali" value="{{ $studentEdit->nm_ibu }}">
                                            @error('nm_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Pekerjaan Ibu/Wali <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control @error('pkrjn_ibu') is-invalid @enderror" name="pkrjn_ibu" placeholder="Enter Pekerjaan Ibu/Wali" value="{{ $studentEdit->pkrjn_ibu }}">
                                            @error('pkrjn_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Alamat Ibu/Wali <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control @error('almt_ibu') is-invalid @enderror" name="almt_ibu" placeholder="Enter Alamat Ibu/Wali" value="{{ $studentEdit->almt_ibu }}">
                                            @error('almt_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>No.HP Ibu/Wali <span class="login-danger">*</span></label>
                                            <input class="form-control @error('nohp_ibu') is-invalid @enderror" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" name="nohp_ibu" placeholder="Enter No.HP Ibu/Wali" value="{{ $studentEdit->nohp_ibu }}">
                                            @error('nohp_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Umur <span class="login-danger">*</span></label>
                                            <input class="form-control @error('umur') is-invalid @enderror" type="text" name="umur" placeholder="Enter Umur" value="{{ $studentEdit->umur }}">
                                            @error('umur')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Tinggi Badan <span class="login-danger">*</span></label>
                                            <input class="form-control @error('tinggi_bd') is-invalid @enderror" type="text" name="tinggi_bd" placeholder="Enter Tinggi Badan" value="{{ $studentEdit->tinggi_bd }}">
                                            @error('tinggi_bd')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Berat Badan <span class="login-danger">*</span></label>
                                            <input class="form-control @error('berat_bd') is-invalid @enderror" type="text" name="berat_bd" placeholder="Enter Berat Badan" value="{{ $studentEdit->berat_bd }}">
                                            @error('berat_bd')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Lingkar Kepala <span class="login-danger">*</span></label>
                                            <input class="form-control @error('lingkar_kpl') is-invalid @enderror" type="text" name="lingkar_kpl" placeholder="Enter Lingkar Kepala" value="{{ $studentEdit->lingkar_kpl }}">
                                            @error('lingkar_kpl')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Keterangan<span class="login-danger">*</span></label>
                                            <select class="form-control select @error('ket') is-invalid @enderror" name="ket">
                                                <option selected disabled>Please Select Keterangan </option>
                                                <option value="Normal" {{ $studentEdit->ket == 'Normal' ? "selected" :"Normal"}}>Normal</option>
                                                <option value="Berkebutuhan Khusus" {{ $studentEdit->ket == 'Berkebutuhan Khusus' ? "selected" :"Berkebutuhan Khusus"}}>Berkebutuhan Khusus</option>
                                            </select>
                                            @error('ket')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Email <span class="login-danger">*</span></label>
                                            <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" placeholder="Enter Email" value="{{ $studentEdit->email }}">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group students-up-files">
                                            <label>Upload Student Photo (150px X 150px)</label>
                                            <div class="uplod">
                                                <h2 class="table-avatar">
                                                    <a class="avatar avatar-sm me-2">
                                                        <img class="avatar-img rounded-circle" src="{{ Storage::url('student-photos/'.$studentEdit->upload) }}" alt="User Image">
                                                    </a>
                                                </h2>
                                                <label class="file-upload image-upbtn mb-0 @error('upload') is-invalid @enderror">
                                                    Choose File <input type="file" name="upload">
                                                </label>
                                                <input type="hidden" name="image_hidden" value="{{ $studentEdit->upload }}">
                                                @error('upload')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="student-submit">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
