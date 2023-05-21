
@extends('layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">Edit Rapor Murid</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('student/add/page') }}">Isi Rapor</a></li>
                                <li class="breadcrumb-item active">Edit Rapor Murid</li>
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
                            <form action="{{ route('studentrapor/update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" name="id" value="{{ $studentEdit->id }}" readonly>
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title student-info">Informasi Rapor Murid
                                            <span>
                                                <a href="javascript:;"><i class="feather-more-vertical"></i></a>
                                            </span>
                                        </h5>
                                    </div>
                                    <div class="col-12 col-sm-2">
                                    <div class="form-group students-up-files">
                                        <div class="uplod">
                                            <h2 class="table-avatar">
                                                    <img class="img-fluid img-thumbnail" src="{{ Storage::url('student-photos/'.$studentEdit->upload) }}" alt="User Image">
                                            </h2>
                                        </div>
                                    </div>
                                    </div>
                                    @if (Session::get('role_name') === 'Guru TK A')
                                    <div class="col-12 col-sm-2">
                                        <div class="form-group local-forms">
                                            <label>Kelas<span class="login-danger">*</span></label>
                                            <select class="form-control select @error('kelas_id') is-invalid @enderror" name="kelas_id" disabled>
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
                                            <select class="form-control select @error('kelas_id') is-invalid @enderror" name="kelas_id" disabled>
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
                                   
                                    <div class="col-12 col-sm-2">
                                        <div class="form-group local-forms">
                                            <label>NPSN<span class="login-danger">*</span></label>
                                            <input type="text" class="form-control @error('npsn') is-invalid @enderror" name="npsn" placeholder="Enter NPSN" value="{{ $studentEdit->npsn }}" disabled>
                                            @error('npsn')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <div class="form-group local-forms">
                                            <label>Nama Murid<span class="login-danger">*</span></label>
                                            <input type="text" class="form-control @error('nm_anak') is-invalid @enderror" name="nm_anak" placeholder="Enter Nama Murid" value="{{ $studentEdit->nm_anak }}" disabled>
                                            @error('nm_anak')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-2">
                                        <div class="form-group local-forms">
                                            <label>Sakit<span class="login-danger">*</span></label>
                                            <input type="text" class="form-control @error('sakit') is-invalid @enderror" name="sakit" value="{{ $studentEdit->rapor?->sakit }}">
                                            @error('sakit')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-2">
                                        <div class="form-group local-forms">
                                            <label>Ijin<span class="login-danger">*</span></label>
                                            <input type="text" class="form-control @error('ijin') is-invalid @enderror" name="ijin" value="{{$studentEdit->rapor?->ijin }}">
                                            @error('ijin')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-2">
                                        <div class="form-group local-forms">
                                            <label>Tanpa Keterangan<span class="login-danger">*</span></label>
                                            <input type="text" class="form-control @error('tanpa_ket') is-invalid @enderror" name="tanpa_ket" value="{{ $studentEdit->rapor?->tanpa_ket }}">
                                            @error('tanpa_ket')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
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
    <script>
        document.addEventListener('trix-file-accept', function(e){
          e.preventDefault();
        })
    </script>
@endsection
