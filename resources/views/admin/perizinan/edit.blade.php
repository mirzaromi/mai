
@extends('admin.template')
@section('container')
    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Perizinan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="/admin/perizinan/{{ $data->id }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                            placeholder="Input nama" name="nama" value="{{ old('nama', $data->siswa->nama_siswa) }}"
                            readonly="readonly" required>
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Slug</label>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                            placeholder="Slug" name="slug" value="{{ old('slug', $data->siswa->slug) }}"
                            readonly="readonly" required>
                        @error('slug')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Kelas</label>
                        <input type="text" class="form-control @error('kelas') is-invalid @enderror" id=""
                            placeholder="Input kelas" value="{{ old('kelas', $data->siswa->kelas) }}" name="kelas"
                            readonly="readonly" required>
                        @error('kelas')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Angkatan</label>
                        <input type="text" class="form-control @error('angkatan') is-invalid @enderror" id=""
                            placeholder="Input angkatan" value="{{ old('angkatan', $data->siswa->angkatan) }}"
                            name="angkatan" readonly="readonly" required>
                        @error('angkatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Kategori</label>
                        <input type="text" class="form-control @error('kategori') is-invalid @enderror" id=""
                            placeholder="Input kategori" value="{{ old('kategori', $data->kategori) }}" name="kategori"
                            required>
                        @error('kategori')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Keterangan</label>
                        <textarea class="form-control @error('keterangan') is-invalid @enderror" id="" rows="6"
                            name="keterangan" value="{{ old('keterangan') }}"
                            required>{{ $data->keterangan }}</textarea>
                        @error('keterangan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Waktu Mulai</label>
                        <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime"
                                name="waktu_mulai" value="{{ old('waktu_mulai', $data->waktu_mulai) }}" />
                            <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Waktu Selesai</label>
                        <div class="input-group date" id="reservationdatetime2" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime2"
                                name="waktu_selesai" value="{{ old('waktu_selesai', $data->waktu_selesai) }}" />
                            <div class="input-group-append" data-target="#reservationdatetime2"
                                data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="/admin/perizinan/">
                        <button type="button" class="btn btn-primary">Back</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Gambar Perizinan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <img src="{{ asset('storage/' . $data->siswa->foto) }}" alt="" style="max-width: 100%">
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">

            </div>
        </div>
    </div>

@endsection
