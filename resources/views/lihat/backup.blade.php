<div class="row">
    <div class="col-sm-12">
        <div class="card card-table comman-shadow">
            <div class="card-body2">
                <div class="table-responsive">
                    <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                        <thead class="student-thread">
                            <tr>
                                <th>NO</th>
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
            <div>
        </div>
        
    </div>
</div>