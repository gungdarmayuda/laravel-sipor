@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">Pengesahan Rapor Murid</h3>
                        </div>
                     </div>
                </div>
            </div>
        {!! Toastr::message() !!} 
            <div class="row">
                <div class="col-12 col-lg-12 col-xl-8">
                    <div class="row">
                        <div class="col-12 col-lg-8 col-xl-8 d-flex">
                            <div class="card flex-fill comman-shadow">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <h5 class="card-title">Permintaan Pengesahan</h5>
                                        </div>
                                    </div>
                                </div>

                        @if ($data_a->konfirmasi === '1')
                        <div class="">
                            <form action="{{ route('studentkonfirmasikepala/update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" name="pengesahan_kepsek" value="1" readonly>
                                <div class="pt-3 pb-3">
                                    <div class="table-responsive lesson">
                                        <table class="table table-center">
                                            <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="date">
                                                                <b>{{ $guru_a?->name }}</b>
                                                                <ul class="teacher-date-list">
                                                                    <li><i class="fas fa-calendar-alt me-2"></i>{{ $data_a->waktu }}</li>
                                                                    {{-- <li>|</li>
                                                                    <li><i class="fas fa-clock me-2"></i>09:00 - 10:00
                                                                        am</li> --}}
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            @if ($indikator_a === true)
                                                                <div class="lesson-confirm">
                                                                    <a href="">Terkonfirmasi</a>
                                                                </div>
                                                            @endif
                                                                <button type="submit" class="btn btn-info">Konfirmasi</button>
                                                        </td>
                                                    </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @endif

                        @if ($data_b->konfirmasi === '1')
                        <div class="">
                            <form action="{{ route('studentkonfirmasikepala_dua/update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" name="pengesahan_kepsek" value="1" readonly>
                                <div class="pt-3 pb-3">
                                    <div class="table-responsive lesson">
                                        <table class="table table-center">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="date">
                                                            <b>{{ $guru_b?->name }}</b>
                                                            <ul class="teacher-date-list">
                                                                <li><i class="fas fa-calendar-alt me-2"></i>{{ $data_b->waktu }}</li>
                                                                {{-- <li>|</li>
                                                                <li><i class="fas fa-clock me-2"></i>09:00 - 10:00
                                                                    am</li> --}}
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        @if ($indikator_b === true)
                                                            <div class="lesson-confirm">
                                                                <a href="">Terkonfirmasi</a>
                                                            </div>
                                                        @endif
                                                            <button type="submit" class="btn btn-info">Konfirmasi</button>
                                                    </td>
                                                </tr>
                                                </form>
                                             </tbody>
                                        </table>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @endif

                        @if ($data_a->konfirmasi === '0' && $data_b->konfirmasi === '0')
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h5 class="card-title">Belum tersedia</h5>
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 

@endsection