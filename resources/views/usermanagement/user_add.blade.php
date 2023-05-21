
@extends('layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">Buat Akun</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('student/add/page') }}">Manajemen Pengguna</a></li>
                                <li class="breadcrumb-item active">Buat Akun</li>
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
                            <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="login-right">
                                        <div class="login-right-wrap">
                                            <form action="{{ route('register') }}" method="POST">
                                                @csrf
                                                <div class="col-12 col-sm-5">
                                                    <div class="form-group local-forms">
                                                        <label>Nama Lengkap <span class="login-danger">*</span></label>
                                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                                                        <span class="profile-views"><i class="fas fa-user-circle"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-5">
                                                    <div class="form-group local-forms">
                                                        <label>Email <span class="login-danger">*</span></label>
                                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email">
                                                        <span class="profile-views"><i class="fas fa-envelope"></i></span>
                                                    </div>
                                                </div>


                                                <div class="col-12 col-sm-5">
                                                    <div class="form-group local-forms">
                                                        <label>No.HP <span class="login-danger">*</span></label>
                                                        <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number">
                                                        <span class="profile-views"><i class="fas fa-user-circle"></i></span>
                                                    </div>
                                                </div>

                                                {{-- insert defaults --}}
                                                <input type="hidden" class="image" name="image" value="photo_defaults.jpg">
                                                
                                                {{-- insert defaults --}}
                                                <input type="hidden" class="status" name="status" value="Active">

                                                <div class="col-12 col-sm-5">
                                                    <div class="form-group local-forms">
                                                        <label>Role Name <span class="login-danger">*</span></label>
                                                        <select class="form-control select @error('role_name') is-invalid @enderror" name="role_name" id="role_name">
                                                            <option selected disabled>Role Type</option>
                                                            @foreach ($role as $name)
                                                                <option value="{{ $name->role_type }}">{{ $name->role_type }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('role_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    </div>
                                                </div>
                                                
                                                <div class="col-12 col-sm-5">
                                                    <div class="form-group local-forms">
                                                        <label>Password <span class="login-danger">*</span></label>
                                                        <input type="password" class="form-control pass-input  @error('password') is-invalid @enderror" name="password">
                                                        <span class="profile-views feather-eye toggle-password"></span>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-5">
                                                    <div class="form-group local-forms">
                                                        <div class="form-group">
                                                            <label>Confirm password <span class="login-danger">*</span></label>
                                                            <input type="password" class="form-control pass-confirm @error('password_confirmation') is-invalid @enderror" name="password_confirmation">
                                                            <span class="profile-views feather-eye reg-toggle-password"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-5">
                                                    <div class="form-group mb-0 local-forms">
                                                        <button class="btn btn-primary btn-block" type="submit">Register</button>
                                                    </div>
                                                </div>
                                            </form>
                                         </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function previewImage() {
          const image = document.querySelector('#upload');
          const imgPreview = document.querySelector('.img-preview');
    
          imgPreview.style.display ='block';
    
          const oFReader = new FileReader();
          oFReader.readAsDataURL(image.files[0]); 
    
          oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
          }
        }
    </script>
@endsection
