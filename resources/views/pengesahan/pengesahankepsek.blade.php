
@extends('layouts.master')
{{-- view --}}
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
            
            <style>
                .rounded-circle2
                {
                    border:1px solid;
                    border-radius:50%;
                    width:50px;
                    height:50px;

                }
            </style>
            @if($studentList->count())
            @foreach ($studentList as $key=>$data )
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-header">
                        <div class="row align-items-center">
                            <div class="col-auto profile-image">
                                <a href="#">
                                    <img class="rounded-circle2" alt="{{ Session::get('name') }}" src="/student-photos/{{ Session::get('avatar') }}"> 
                                    {{-- {{ Storage::url('student-photos/'.$list->upload) }} --}}
                                </a>
                            </div>
                            <div class="col ms-md-n2 profile-user-info">
                                <h4 class="user-name mb-0">{{ Session::get('name') }}</h4>
                                <h6 class="text-muted mt-1">Kelas TK {{ $data->kelas->kelas_type }}</h6>
                            </div>
                        </div>
                    </div>
                   
                    <div class="profile-menu">
                        <div class="row d-flex justify-content-center">
                            @if ($data->pengesahan->pengesahan_kepsek === '1')
                            <div class="col-lg-9">
                                        <h5 class="card-title d-flex justify-content-between mt-2">
                                            <span>A. Mengisi Refleksi Orang Tua</span>
                                        </h5>
                                        <br>
                                    <div class="">
                                        <form action="{{ route('studentkonfirmasi/update') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" class="form-control" name="id" value="{{ $data->id }}" readonly>
                                            <div class="row justify-center">
                                                <div class="col-12 col-sm-8">
                                                    <div class="mb-3">
                                                        <label>1. Apa yang saya amati sudah berkembang pada diri anak saya?<span class="login-danger">*</span></label>
                                                        @error('refleksi_pertama')
                                                        <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                        <input id="refleksi_pertama" type="hidden" name="refleksi_pertama" value="{{ $data->pengesahan?->refleksi_pertama }}">
                                                        <trix-editor input="refleksi_pertama"></trix-editor>  
                                                    </div>
                                                </div>
            
                                                <div class="col-12 col-sm-8">
                                                    <div class="mb-3">
                                                        <label>2. Apa saja yang masih perlu dikembangkan pada diri anak saya?<span class="login-danger">*</span></label>
                                                        @error('refleksi_kedua')
                                                        <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                        <input id="refleksi_kedua" type="hidden" name="refleksi_kedua" value="{{ $data->pengesahan?->refleksi_kedua }}">
                                                        <trix-editor input="refleksi_kedua"></trix-editor>  
                                                    </div>
                                                </div>
            
                                                <div class="col-12 col-sm-8">
                                                    <div class="mb-3">
                                                        <label>3. Langkah-langkah yang dapat saya lakukan untuk membantu anak saya mengembangkan hal tersebut?<span class="login-danger">*</span></label>
                                                        @error('refleksi_ketiga')
                                                        <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                        <input id="refleksi_ketiga" type="hidden" name="refleksi_ketiga" value="{{ $data->pengesahan?->refleksi_ketiga }}">
                                                        <trix-editor input="refleksi_ketiga"></trix-editor>  
                                                    </div>
                                                </div>
                                                
                                                <h5 class="card-title d-flex justify-content-between mt-3">
                                                    <span>B. Penggunaan QR Code</span>
                                                </h5>
                                                <h6 class="text-muted mt-1">Setelah mengisi refleksi orang tua, QR Code akan dicantumkan pada rapor sebagai bukti pengesahan oleh orang tua murid. Orang tua murid tidak perlu melakukan mengumpulkan rapor atau memberikan tanda tangan kembali sebagai bukti telah menerima rapor murid. </h6>
                                                
                                                <div class="col-12 mt-3 mb-3">
                                                    <div class="student-submit">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <h5 class="card-title d-flex justify-content-between mt-2">
                        <span>Belum tersedia</span>
                    </h5>
                    @endif
                    {{-- -------------- --}}
                    <div class="tab-content profile-tab-cont">
                        <div class="tab-pane fade show active" id="per_details_tab">
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
            @else 
            <p class="text-center fs-4">Tidak ada data yang ditemukan</p>
            @endif

            {{-- message --}}
            {!! Toastr::message() !!}
            {{-- <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table comman-shadow">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                    <thead class="student-thread">
                                        <tr>
                                            <th>Kelas</th>
                                            <th>NPSN</th>
                                            <th>Nama</th>
                                            <th>Refleksi Orang tua</th>
                                            <th>Status</th>
                                            <th class="text-end">Lihat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($studentList->count())
                                        @foreach ($studentList as $key=>$list )
                                        <tr>
                                            <td>{{ $list->kelas->kelas_type }}</td>
                                            <td>{{ $list->npsn }}</td>
                                            <td hidden class="id">{{ $list->id }}</td>
                                            <td hidden class="avatar">{{ $list->upload }}</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="student-details.html"class="avatar avatar-sm me-2">
                                                        <img class="avatar-img rounded-circle" src="{{ Storage::url('student-photos/'.$list->upload) }}" alt="">
                                                    </a>
                                                    <a href="student-details.html">{{ $list->nm_anak }}</a>
                                                </h2>
                                            </td>
                                            <td>
                                                <div class="edit-delete-btn">
                                                    @if ($list->nilai->nilai_pertama === null)
                                                    <a class="text-danger" >Belum Terisi</a>
                                                    @elseif ($list->nilai->nilai_kedua === null)
                                                    <a class="text-danger" >Belum Terisi</a>
                                                    @elseif ($list->nilai->nilai_ketiga === null)
                                                    <a class="text-danger" >Belum Terisi</a>
                                                    @elseif ($list->nilai->nilai_keempat === null)
                                                    <a class="text-danger" >Belum Terisi</a>
                                                    @else 
                                                    <a class="text-success">Sudah Terisi</a>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>
                                                <div class="edit-delete-btn">
                                                    @if ($list->rapor->status === '0')
                                                    <a class="text-danger" >Menunggu Konfirmasi Guru</a>
                                                    @elseif ($list->rapor->status === '1')
                                                    <a class="text-danger" >Menunggu Konfirmasi Kepala Sekolah</a>
                                                    @elseif ($list->rapor->status === '2')
                                                    <a class="text-danger" >Menunggu Konfirmasi Orang Tua</a>
                                                    @else 
                                                    <a class="text-success">Sudah Terkonfirmasi</a>
                                                    @endif
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <div class="actions">
                                                    <a href="{{ url('studentcetak/rapor/'.$list->npsn.'-'.$list->nm_anak) }}" target="_blank"class="btn btn-sm bg-danger-light">
                                                        <i class="feather-edit"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else 
                                        <p class="text-center fs-4">Tidak ada data yang ditemukan</p>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        <div>
                    </div>
                    
                </div>
            </div> --}}
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
                    <form action="{{ route('student/delete') }}" method="POST">
                        @csrf
                        <div class="delete-wrap text-center">
                            <div class="del-icon">
                                <i class="feather-x-circle"></i>
                            </div>
                            <input type="hidden" name="id" class="e_id" value="">
                            <input type="hidden" name="avatar" class="e_avatar" value="">
                            <h2>Sure you want to delete</h2>
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
        $(document).on('click','.student_delete',function()
        {
            var _this = $(this).parents('tr');
            $('.e_id').val(_this.find('.id').text());
            $('.e_avatar').val(_this.find('.avatar').text());
        });
    </script>
    @endsection

@endsection
