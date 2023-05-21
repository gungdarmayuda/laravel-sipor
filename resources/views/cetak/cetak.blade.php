
@extends('layouts.master')
{{-- view --}}
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">Nilai Murid</h3>
                        </div>
                    </div>
                </div>
            </div>
            {{-- message --}}
            {!! Toastr::message() !!}
            <div class="student-group-form">
                <form action="{{ route('studentcetak/list') }}">
                <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search by No.Induk / Nama ..." name="search" value="{{ request('search') }}">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="search-student-btn">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table comman-shadow">
                        <div class="card-body">
                            <div class="page-header">
                                <div class="row align-items-center">
                                    <div class="col-auto text-end float-end ms-auto download-grp">
                                        <a href="{{ route('studentcetak/list') }}" class="btn btn-outline-gray me-1 active"><i class="feather-list"></i></a>
                                        <a href="{{ route('studentcetak/grid') }}" class="btn btn-outline-gray me-1"><i class="feather-grid"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                    <thead class="student-thread">
                                        <tr>
                                            <th>NO</th>
                                            <th>Kelas</th>
                                            <th>No.Induk</th>
                                            <th>Nama</th>
                                            <th>Nilai</th>
                                            <th>Status</th>
                                            <th class="text-end">Cetak & Lihat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($studentList->count())
                                        @foreach ($studentList as $key=>$list )
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $list->kelas->kelas_type }}</td>
                                            <td>{{ $list->no_induk }}</td>
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
                                                    @if ($list->pengesahan->pengesahan_guru === '0')
                                                    <a class="text-danger" >Menunggu Konfirmasi Guru</a>
                                                    @elseif ($list->pengesahan->pengesahan_kepsek=== '0')
                                                    <a class="text-danger" >Menunggu Konfirmasi Kepala Sekolah</a>
                                                    @elseif ($list->pengesahan->pengesahan_orangtua === '0')
                                                    <a class="text-danger" >Menunggu Konfirmasi Orang Tua</a>
                                                    @else 
                                                    <a class="text-success">Sudah Terkonfirmasi</a>
                                                    @endif
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <div class="actions">
                                                    {{-- <a href="{{ url('studentcetak/edit/'.$list->id) }}" class="btn btn-sm bg-danger-light">
                                                        <i class="feather-edit"></i>
                                                    </a> --}}
                                                    <a href="{{ url('studentcetak/rapor/'.$list->no_induk.'-'.$list->nm_anak) }}" target="_blank"class="btn btn-sm bg-danger-light">
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
