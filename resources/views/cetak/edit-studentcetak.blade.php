
@extends('layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">Edit Nilai Murid</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('student/add/page') }}">Data Murid</a></li>
                                <li class="breadcrumb-item active">Edit Nilai Murid</li>
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
                            <form action="{{ route('studentnilai/update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" name="id" value="{{ $studentEdit->id }}" readonly>
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title student-info">Informasi Nilai Murid
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

                                    <div class="col-12 col-sm-8">
                                        <div class="mb-3">
                                            <label>1. Capaian Nilai Agama dan Budi Pekerti<span class="login-danger">*</span></label>
                                            @error('nilai_pertama')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                            <input id="nilai_pertama" type="hidden" name="nilai_pertama" value="{{ $studentEdit->nilai?->nilai_pertama }}">
                                            <trix-editor input="nilai_pertama"></trix-editor>  
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-8">
                                        <div class="mb-3">
                                            <label>2. Capaian Jati Diri<span class="login-danger">*</span></label>
                                            @error('nilai_kedua')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                            <input id="nilai_kedua" type="hidden" name="nilai_kedua" value="{{ $studentEdit->nilai?->nilai_kedua }}">
                                            <trix-editor input="nilai_kedua"></trix-editor>  
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-8">
                                        <div class="mb-3">
                                            <label>3. Capaian Dasar-Dasar Literasi dan STEAM<span class="login-danger">*</span></label>
                                            @error('nilai_ketiga')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                            <input id="nilai_ketiga" type="hidden" name="nilai_ketiga" value="{{ $studentEdit->nilai?->nilai_ketiga }}">
                                            <trix-editor input="nilai_ketiga"></trix-editor>  
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-8">
                                        <div class="mb-3">
                                            <label>4. Capaian Profil Pelajar Pancasila<span class="login-danger">*</span></label>
                                            @error('nilai_keempat')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                            <input id="nilai_keempat" type="hidden" name="nilai_keempat" value="{{ $studentEdit->nilai?->nilai_keempat }}">
                                            <trix-editor input="nilai_keempat"></trix-editor>  
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
