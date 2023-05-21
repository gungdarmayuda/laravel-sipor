@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">Pengajuan & Penertiban Rapor Murid</h3>
                        </div>
                     </div>
                </div>
            </div>
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
                     <h5 class="mb-3">Prosedur pengajuan rapor</h5></h1>
                     <div class="row gx-5 gy-3">
                         <div class="col-12 col-lg-9">
                            <div><p class="col-sm-19 mb-0"><span class="login-danger">*</span> 1. Guru melakukan pengajuan dan sekaligus akan mengesahkan rapor dengan menekan tombol kirim yang terletak pada menu pengajuan pengesahan.<br></p></div>
                            <div><p class="col-sm-19 mb-0"><span class="login-danger">*</span> 2. Menunggu konfirmasi dari kepala sekolah untuk mengesahkan rapor.<br></p></div>
                            <div><p class="col-sm-19 mb-0"><span class="login-danger">*</span> 3. Setelah terkonfirmasi oleh kepala sekolah, orang tua murid dapat segera mengesahkan rapor.<br></p></div>
                            <div><p class="col-sm-19 mb-0"><span class="login-danger">*</span> 4. Bukti rapor yang telah disahkan adalah tercantumnya kode QR, yang dapat dilihat dan dicetak langsung pada menu cetak dan lihat rapor.<br></p></div>
                         </div><!--//col-->
                     </div><!--//row-->
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div><!--//app-card-body-->
                 
             </div><!--//inner-->
         </div><!--//app-card-->
        {!! Toastr::message() !!} 
            <div class="row">
                <div class="col-12 col-lg-12 col-xl-8">
                    <div class="row">
                        <div class="col-12 col-lg-8 col-xl-8 d-flex">
                            <div class="card flex-fill comman-shadow">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <h5 class="card-title">Pengajuan Pengesahan</h5>
                                        </div>
                                    </div>
                                </div>

                        @if (Session::get('role_name') === 'Guru TK A')
                        @if ($indikator_a === true)
                        <div class="">
                            <form action="{{ route('studentkonfirmasiguru/update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" name="pengesahan_guru" value="1" readonly>
                                <div class="pt-3 pb-3">
                                    <div class="table-responsive lesson">
                                        <table class="table table-center">
                                            <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="date">
                                                                <b>Kirim ke : {{ $kepala?->name }}</b>
                                                                <p>{{ $kepala?->role_name }}</p>
                                                                <ul class="teacher-date-list">
                                                                    {{-- <li><i class="fas fa-calendar-alt me-2"></i>Sep 5,
                                                                        2022</li>
                                                                    <li>|</li>
                                                                    <li><i class="fas fa-clock me-2"></i>09:00 - 10:00
                                                                        am</li> --}}
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            @if ($send_a->konfirmasi === '1')
                                                                <div class="lesson-confirm">
                                                                    <a class="btn btn-sm bg-danger-light student_delete" data-bs-toggle="modal" data-bs-target="#studentUser">Batalkan</a>
                                                                </div>
                                                            @endif
                                                                <button type="submit" class="btn btn-info">Kirim</button>
                                                        </td>
                                                    </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @endif
                            @if ($indikator_a === false)
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <h5 class="card-title">Belum tersedia</h5>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif
                        {{-- @dd($indikator_a) --}}


                        @if (Session::get('role_name') === 'Guru TK B')
                        @if ($indikator_b === true)
                        <div class="">
                            <form action="{{ route('studentkonfirmasiguru_dua/update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" name="pengesahan_guru" value="1" readonly>
                                <div class="pt-3 pb-3">
                                    <div class="table-responsive lesson">
                                        <table class="table table-center">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="date">
                                                            <b>Kirim ke : {{ $kepala?->name }}</b>
                                                            <p>{{ $kepala?->role_name }}</p>
                                                            <ul class="teacher-date-list">
                                                                {{-- <li><i class="fas fa-calendar-alt me-2"></i>Sep 5,
                                                                    2022</li>
                                                                <li>|</li>
                                                                <li><i class="fas fa-clock me-2"></i>09:00 - 10:00
                                                                    am</li> --}}
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        @if ($send_b->konfirmasi === '1')
                                                            <div class="lesson-confirm">
                                                                <a class="btn btn-sm bg-danger-light studentdua_delete" data-bs-toggle="modal" data-bs-target="#studentduaUser">Batalkan</a>
                                                            </div>
                                                        @endif
                                                            <button type="submit" class="btn btn-info">Kirim</button>
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
                            @if ($indikator_b === false)
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h5 class="card-title">Belum tersedia</h5>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endif


                    </div>
                </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

   {{-- model student delete --}}
   <div class="modal fade contentmodal" id="studentUser" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header pb-0 border-bottom-0  justify-content-end">
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i
                    class="feather-x-circle"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('reset/update') }}" method="POST">
                    @csrf
                    <div class="delete-wrap text-center">
                        <div class="del-icon">
                            <i class="feather-x-circle"></i>
                        </div>
                        <input type="hidden" name="pengesahan" class="pengesahan" value="0">
                        <h2>Apakah anda yakin akan mereset seluruh pengesahan?</h2>
                        <div class="submit-section">
                            <button type="submit" class="btn btn-success me-2">Yes</button>
                            <a class="btn btn-danger" data-bs-dismiss="modal">No</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

   {{-- model student delete --}}
<div class="modal fade contentmodal" id="studentduaUser" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header pb-0 border-bottom-0  justify-content-end">
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i
                    class="feather-x-circle"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('resetdua/update') }}" method="POST">
                    @csrf
                    <div class="delete-wrap text-center">
                        <div class="del-icon">
                            <i class="feather-x-circle"></i>
                        </div>
                        <input type="hidden" name="pengesahan" class="pengesahan" value="0">
                        <h2>Apakah anda yakin akan mereset seluruh pengesahan?</h2>
                        <div class="submit-section">
                            <button type="submit" class="btn btn-success me-2">Yes</button>
                            <a class="btn btn-danger" data-bs-dismiss="modal">No</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@section('script')
    {{-- delete js --}}
    <script>
        $(document).on('click','.studentdua_delete',function()
        {
            var _this = $(this).parents('tr');
            $('.e_id').val(_this.find('.id').text());
            $('.e_avatar').val(_this.find('.avatar').text());
        });
    </script>
@endsection

@endsection