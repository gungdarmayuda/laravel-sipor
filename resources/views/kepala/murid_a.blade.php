
@extends('layouts.master')
{{-- view --}}
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">Informasi Data Murid</h3>
                        </div>
                    </div>
                </div>
            </div>
            {{-- message --}}
            {!! Toastr::message() !!}
            <div class="student-group-form">
                <form action="{{ route('studentmurid/tk_a') }}">
                <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search by NPSN / Nama ..." name="search" value="{{ request('search') }}">
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
                                        <a href="{{ route('studentmurid/tk_a') }}" class="btn btn-outline-gray me-1 active"><i class="feather-list"></i></a>
                                        <a href="{{ route('studentmurid/grid_a') }}" class="btn btn-outline-gray me-1"><i class="feather-grid"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                    <thead class="student-thread">
                                        <tr>
                                            <th>NO</th>
                                            <th>Kelas</th>
                                            <th>NPSN</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Agama</th>
                                            <th>Alamat Anak</th>
                                            <th>Nama Ayah/Wali</th>
                                            <th>Pekerjaan Ayah/Wali</th>
                                            <th>Alamat Ayah/Wali</th>
                                            <th>No.HP Ayah/Wali</th>
                                            <th>Nama Ibu/Wali</th>
                                            <th>Pekerjaan Ibu/Wali</th>
                                            <th>Alamat Ibu/Wali</th>
                                            <th>No.HP Ibu/Wali</th>
                                            <th>Umur</th>
                                            <th>Keterangan</th>
                                            <th>Email</th>
                                         </tr>
                                    </thead>
                                    <tbody>
                                        @if($studentList->count())
                                        @foreach ($studentList as $key=>$list )
                                        <tr>
                                            <td>{{ ++$key }}</td>
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
                                            <td>{{ $list->jns_kelamin }}</td>
                                            <td>{{ $list->agama }}</td>
                                            <td>{{ $list->almt_anak }}</td>
                                            <td>{{ $list->nm_ayah }}</td>
                                            <td>{{ $list->pkrjn_ayah }}</td>
                                            <td>{{ $list->almt_ayah }}</td>
                                            <td>{{ $list->nohp_ayah }}</td>
                                            <td>{{ $list->nm_ibu }}</td>
                                            <td>{{ $list->pkrjn_ibu }}</td>
                                            <td>{{ $list->almt_ibu }}</td>
                                            <td>{{ $list->nohp_ibu }}</td>
                                            <td>{{ $list->umur }}</td>
                                            <td>{{ $list->ket }}</td>
                                            <td>{{ $list->email }}</td>
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
