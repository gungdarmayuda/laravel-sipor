@extends('layouts.app')
@section('content')
<div class="login-right">
    <div class="login-right-wrap">
        <h1>Pengumpulan Rapor QR Code 😊</h1>
        <div class="d-flex align-items-center justify-content-center">
            <img class="avatar-img rounded-circle img-fluid" src="{{ Storage::url('student-photos/'.$qrMurid->upload) }}" alt="User Image" width="50%" >
        </div>
        <div class="d-flex justify-content-center">
            <img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->merge(public_path('logo.png'),0.2, true)->errorCorrection('Q')->size(200)->generate('http://newprojectsipor-laravel.test/qr/murid/'.$qrMurid->nm_anak) ) }}"/>
        </div>
{{-- 
        <div class="d-flex justify-content-center">
            <img src="data:image/png;base64, {{ base64_encode(QrCode::eyeColor(0, 255, 255, 255, 0, 0, 0)->size(400)->generate('test') ) }}"/>
        </div> --}}
        
        <form action="" method="POST" class="mt-3">
            @csrf
            <div class="form-group">
                <label>No.Induk</label>
                <input type="text" class="form-control" name="no_induk" value="{{ $qrMurid->no_induk }}" disabled>
                {{-- <span class="profile-views"><i class="fas fa-envelope"></i></span> --}}
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="email" class="form-control" name="nm_anak" value="{{ $qrMurid->nm_anak }}" disabled>
                {{-- <span class="profile-views"><i class="fas fa-envelope"></i></span> --}}
            </div>
            <div class="form-group">
                <label>Tanggal & Waktu ditandatangani</label>
                <input type="email" class="form-control" name="email" value="{{ $qrMurid->pengesahan->waktu_orangtua }}" disabled>
                {{-- <span class="profile-views"><i class="fas fa-envelope"></i></span> --}}
            </div>
            <div class="form-group">
                <small class="d-block text-center">
                    <p class="mt-3 mb-3 text-muted">&copy;2022-2023 TK Dharmapatni Denpasar</p>
                </small>
            </div>
        </form>
    </div>
</div>

@endsection
