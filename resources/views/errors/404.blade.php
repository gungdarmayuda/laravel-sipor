@extends('layouts.error')
@section('content')
    <div class="main-wrapper">
        <div class="error-box">
            {{-- <h1>404</h1> --}}
            <h3 class="h2 mb-3"></i> Oops! anda masih login</h3>
            <p class="h4 font-weight-normal">Silahkan pilih logout untuk keluar</p>
            <a href="{{route('home')}}" class="btn btn-primary">Kembali ke Halaman Dashboard</a>
        </div>
    </div>
@endsection
