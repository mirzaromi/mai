@extends('admin.template')
@section('container')
    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Lihat Perizinan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

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
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="Slug"
                        name="slug" value="{{ old('slug', $data->siswa->slug) }}" readonly="readonly">
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
                        placeholder="Input angkatan" value="{{ old('angkatan', $data->siswa->angkatan) }}" name="angkatan"
                        readonly="readonly" required>
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
                        readonly="readonly" required>
                    @error('kategori')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Keterangan</label>
                    <textarea class="form-control @error('keterangan') is-invalid @enderror" id="" rows="6"
                        name="keterangan" value="{{ old('keterangan') }}" readonly="readonly"
                        required>{{ $data->keterangan }}</textarea>
                    @error('keterangan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Waktu Mulai</label>
                    <input type="text" class="form-control @error('waktu_mulai') is-invalid @enderror" id=""
                        placeholder="Input waktu_mulai" value="{{ old('waktu_mulai', $data->waktu_mulai) }}"
                        name="waktu_mulai" readonly="readonly" required>
                    @error('waktu_mulai')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Waktu Selesai</label>
                    <input type="text" class="form-control @error('waktu_selesai') is-invalid @enderror" id=""
                        placeholder="Input waktu_selesai" value="{{ old('waktu_selesai', $data->waktu_selesai) }}"
                        name="waktu_selesai" readonly="readonly" required>
                    @error('waktu_selesai')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <a href="/admin/perizinan">
                    <button type="button" class="btn btn-primary">Back</button>
                </a>
            </div>

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
