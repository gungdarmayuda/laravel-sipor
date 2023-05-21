
@extends('layouts.app')
@section('content')
{{-- message --}}
{!! Toastr::message() !!}
<div class="login-right">
    <div class="login-right-wrap">
        <h1>Selamat Datang 😊</h1>
        <p class="account-subtitle">Sistem Informasi E-Rapor merupakan aplikasi berbasis website, bertujuan untuk memudahkan guru dalam menginformasikan dan melakukan penertiban rapor murid.</p>
        <img class="img-fluid mx-auto d-block" width="20%" src="{{ URL::to('assets/img/logo.png') }}" alt="Logo">
        <form action="{{ route('login') }}" method="POST" class="mt-3">
            @csrf
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email">
                <span class="profile-views"><i class="fas fa-envelope"></i></span>
            </div>
            <div class="form-group">
                <label>Password</span></label>
                <input type="password" class="form-control pass-input @error('password') is-invalid @enderror" name="password">
                <span class="profile-views feather-eye toggle-password"></span>
            </div>
            
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Login</button>
                <small class="d-block text-center">
                    <p class="mt-3 mb-3 text-muted">&copy;2022-2023 TK Dharmapatni Denpasar</p>
                </small>
            </div>
            <p class="account-subtitle">Kembali ke Profil <a href="/">Paud TK Dharmapatni</a></p>
            {{-- <p class="account-subtitle">Kembali ke Profil <a href="{{ route('register') }}">Paud TK Dharmapatni</a></p> --}}
        </form>
    </div>
</div>

@endsection
