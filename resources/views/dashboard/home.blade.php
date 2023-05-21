
@extends('layouts.master')
@section('content')
{{-- message --}}
{!! Toastr::message() !!}
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Welcome {{ Session::get('name') }}!</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">{{ Session::get('name') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        @if (Session::get('role_name') === 'Guru TK A')
        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Murid TK A</h6>
                                <h3>{{ $murid_a }} Orang</h3>
                            </div>
                            <div class="db-icon">
                                <img src="assets2/img/icons/dash-icon-01.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Pengumpulan Rapor TK A</h6>
                                <h3>{{ $pengumpulan_a }} Orang</h3>
                            </div>
                            <div class="db-icon">
                                <img src="assets2/img/icons/dash-icon-02.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if (Session::get('role_name') === 'Guru TK B')
        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Murid TK B</h6>
                                <h3>{{ $murid_b }} Orang</h3>
                            </div>
                            <div class="db-icon">
                                <img src="assets2/img/icons/dash-icon-01.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Pengumpulan Rapor TK B</h6>
                                <h3>{{ $pengumpulan_b }} Orang</h3>
                            </div>
                            <div class="db-icon">
                                <img src="assets2/img/icons/dash-icon-02.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if (Session::get('role_name') === 'Kepala Sekolah')
        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Murid TK A</h6>
                                <h3>{{ $murid_a }} Orang</h3>
                            </div>
                            <div class="db-icon">
                                <img src="assets2/img/icons/dash-icon-01.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Murid TK B</h6>
                                <h3>{{ $murid_b }} Orang</h3>
                            </div>
                            <div class="db-icon">
                                <img src="assets2/img/icons/dash-icon-01.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Pengumpulan Rapor TK A</h6>
                                <h3>{{ $pengumpulan_a }} Orang</h3>
                            </div>
                            <div class="db-icon">
                                <img src="assets2/img/icons/dash-icon-02.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Pengumpulan Rapor TK B</h6>
                                <h3>{{ $pengumpulan_b }} Orang</h3>
                            </div>
                            <div class="db-icon">
                                <img src="assets2/img/icons/dash-icon-02.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if (Session::get('role_name') === 'Admin')
        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Total Pengguna</h6>
                                <h3>{{ $totalpengguna }} Orang</h3>
                            </div>
                            <div class="db-icon">
                                <img src="assets2/img/icons/dash-icon-01.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif


        @if (Session::get('role_name') === 'Orang Tua Murid')
        <style>
               .app-card{
                    background-color: white;
               }     
               .app-card.border-left-decoration{
                    border-left:3px solid #3d5ee1;
                }
               .btn{
                    background-color: #3d5ee1;
                    color:white;
               }
        </style>
        <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
            <div class="inner">
                <div class="app-card-body p-3 p-lg-4">
                    <h3 class="mb-3">Welcome, {{ auth()->user()->name }}!</h3></h1>
                    <div class="row gx-5 gy-3">
                        <div class="col-12 col-lg-9">
                            <div>Sistem Informasi E-Rapor merupakan aplikasi berbasis website, bertujuan untuk memudahkan guru dalam menginformasikan dan melakukan penertiban rapor murid.</div>
                        </div><!--//col-->
                        <div class="col-12 col-lg-3">
                            <a href="{{ route('studentlihat/list')}}" class="btn app-btn-primary" href=""><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-arrow-down me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/>
                                    <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z"/>
                                    <path fill-rule="evenodd" d="M8 6a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 10.293V6.5A.5.5 0 0 1 8 6z"/>
                                    </svg>Lihat Rapor</a>
                        </div><!--//col-->
                    </div><!--//row-->
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div><!--//app-card-body-->
                
            </div><!--//inner-->
        </div><!--//app-card-->
        {{-- <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Total Pengguna</h6>
                                <h3>{{ $totalpengguna }} Orang</h3>
                            </div>
                            <div class="db-icon">
                                <img src="assets2/img/icons/dash-icon-01.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        @endif

       
          
        {{-- <div class="row">
            <div class="col-xl-6 d-flex">

                <div class="card flex-fill comman-shadow">
                    <div class="card-header d-flex align-items-center">
                        <h5 class="card-title ">Notifikasi</h5>
                        <ul class="chart-list-out student-ellips">
                            <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="activity-groups">
                            <div class="activity-awards">
                                <div class="award-boxs">
                                    <img src="assets2/img/icons/award-icon-01.svg" alt="Award">
                                </div>
                                <div class="award-list-outs">
                                    <h4>1st place in "Chess”</h4>
                                    <h5>John Doe won 1st place in "Chess"</h5>
                                </div>
                                <div class="award-time-list">
                                    <span>1 Day ago</span>
                                </div>
                            </div>
                            <div class="activity-awards">
                                <div class="award-boxs">
                                    <img src="assets2/img/icons/award-icon-02.svg" alt="Award">
                                </div>
                                <div class="award-list-outs">
                                    <h4>Participated in "Carrom"</h4>
                                    <h5>Justin Lee participated in "Carrom"</h5>
                                </div>
                                <div class="award-time-list">
                                    <span>2 hours ago</span>
                                </div>
                            </div>
                            <div class="activity-awards">
                                <div class="award-boxs">
                                    <img src="assets2/img/icons/award-icon-03.svg" alt="Award">
                                </div>
                                <div class="award-list-outs">
                                    <h4>Internation conference in "St.John School"</h4>
                                    <h5>Justin Leeattended internation conference in "St.John School"</h5>
                                </div>
                                <div class="award-time-list">
                                    <span>2 Week ago</span>
                                </div>
                            </div>
                            <div class="activity-awards mb-0">
                                <div class="award-boxs">
                                    <img src="assets2/img/icons/award-icon-04.svg" alt="Award">
                                </div>
                                <div class="award-list-outs">
                                    <h4>Won 1st place in "Chess"</h4>
                                    <h5>John Doe won 1st place in "Chess"</h5>
                                </div>
                                <div class="award-time-list">
                                    <span>3 Day ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div> --}}
    </div>
</div>
@endsection
