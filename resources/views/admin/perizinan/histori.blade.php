@extends('admin.template')
@section('container')
    <div class="col-12">
        @if (session()->has('sukses'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('sukses') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tabel Histori Perizinan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6"></div>
                        <div class="col-sm-12 col-md-6"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-hover dataTable dtr-inline" role="grid"
                                aria-describedby="example2_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="No: activate to sort column descending">No</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Nama: activate to sort column ascending">Nama
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Kelas: activate to sort column ascending">
                                            Kelas</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="angkatan: activate to sort column ascending">
                                            angkatan</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="kategori perizinan: activate to sort column ascending">
                                            kategori perizinan</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1"
                                            aria-label="keterangan perizinan: activate to sort column ascending">
                                            keterangan perizinan</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="waktu selesai: activate to sort column ascending">
                                            waktu selesai</th>
                                        {{-- <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Aksi: activate to sort column ascending">Aksi
                                        </th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)
                                        {{-- {{ $d->siswa->nama_siswa }} --}}
                                        {{-- @dd($d->siswa->kelas) --}}
                                        <tr class="">
                                            
                                            <td class="dtr-control sorting_1" tabindex="0">{{ $loop->iteration }}</td>
                                            <td>{{ $d->siswa->nama_siswa }} </td>
                                            <td>{{ $d->siswa->kelas }}</td>
                                            <td>{{ $d->siswa->angkatan }}</td>
                                            <td>{{ $d->kategori }}</td>
                                            <td>{{ $d->keterangan }}</td>

                                            <td>{{ \Carbon\Carbon::parse($d->waktu_selesai)->isoFormat('dddd, D MMMM Y') }}
                                                - {{ \Carbon\Carbon::parse($d->waktu_selesai)->Format('H:i') }}</td>
                                            {{-- <td>
                                                <div class="btn-group">
                                                    <a href="/admin/perizinan/{{ $d->id }}" class="text-white">
                                                        <button type="button" class="btn btn-success">
                                                            <i class="far fa-eye"></i>
                                                        </button>
                                                    </a>
                                                    <a href="/admin/perizinan/{{ $d->id }}/edit"
                                                        class="text-white">
                                                        <button type="button" class="btn btn-warning text-white">
                                                            <i class="far fa-edit"></i>
                                                        </button>
                                                    </a>
                                                    <a href="">
                                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                                            data-target="#modal-default">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </a>
                                                    <form action="/admin/perizinan/{{ $d->id }}" method="POST"
                                                        class="">
                                                        @method('delete')
                                                        @csrf
                                                        <div class="modal fade" id="modal-default">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title">Default Modal</h4>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <h3>Yakin nih mau dihapus?</h3>
                                                                    </div>
                                                                    <div class="modal-footer justify-content-between">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type="submit"
                                                                            class="btn btn-danger">Hapus</button>
                                                                    </div>
                                                                </div>
                                                                <!-- /.modal-content -->
                                                            </div>
                                                            <!-- /.modal-dialog -->
                                                        </div>
                                                    </form>
                                                </div>
                                            </td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">No</th>
                                        <th rowspan="1" colspan="1">Nama</th>
                                        <th rowspan="1" colspan="1">Kelas</th>
                                        <th rowspan="1" colspan="1">Angkatan</th>
                                        <th rowspan="1" colspan="1">Kategori Perizinan</th>
                                        <th rowspan="1" colspan="1">Keterangan Perizinan</th>
                                        <th rowspan="1" colspan="1">Waktu Selesai</th>
                                        {{-- <th rowspan="1" colspan="1">Aksi</th> --}}
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="row">

                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </div>
@endsection
