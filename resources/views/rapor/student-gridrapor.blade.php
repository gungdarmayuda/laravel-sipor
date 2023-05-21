
@extends('layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">Rapor Murid</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('student/list') }}">Rapor Murid</a></li>
                                <li class="breadcrumb-item active">Isi Rapor</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table comman-shadow">
                        <div class="card-body pb-0">
                            <div class="page-header">
                                <div class="row align-items-center">
                                    <div class="col-auto text-end float-end ms-auto download-grp">
                                        <a href="{{ route('studentrapor/list') }}" class="btn btn-outline-gray me-2"><i class="feather-list"></i></a>
                                        <a href="{{ route('studentrapor/grid') }}" class="btn btn-outline-gray me-2 active"><i class="feather-grid "></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="student-pro-list">
                                <div class="row">
                                    @foreach ($studentList as $key=>$list )
                                    <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-avatar student-content pb-0">
                                                        <h2 class="table-avatar">
                                                            <a href="{{ url('studentrapor/edit/'.$list->id) }}"class="avatar avatar-sm me-2">
                                                                <img class="avatar-img rounded-circle" src="{{ Storage::url('/student-photos/'.$list->upload) }}" alt="">
                                                            </a>
                                                        </h2>
                                                    <div class="student-content pb-0">
                                                        <h6>{{ $list->nm_anak }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
