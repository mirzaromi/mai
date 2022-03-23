
@extends('admin.template')
@section('container')
@foreach ($data as $data)
    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Data Siswa</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
                
            
            <form method="POST" action="/admin/perizinan_siswa/{{ $data->id }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control @error('nama_siswa') is-invalid @enderror" id="nama_siswa"
                            placeholder="Input nama_siswa" name="nama_siswa" value="{{ old('nama_siswa', $data->nama_siswa) }}"
                            required>
                        @error('nama_siswa')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Slug</label>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                            placeholder="Slug" name="slug" value="{{ old('slug', $data->slug) }}"
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
                            placeholder="Input kelas" value="{{ old('kelas', $data->kelas) }}" name="kelas"
                            required>
                        @error('kelas')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Angkatan</label>
                        <input type="text" class="form-control @error('angkatan') is-invalid @enderror" id=""
                            placeholder="Input angkatan" value="{{ old('angkatan', $data->angkatan) }}"
                            name="angkatan" required>
                        @error('angkatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control select2bs4" style="width: 100%;" name="jk" required>
                            <option selected="" value="l">Laki-laki</option>
                            <option selected="" value="p">Perempuan</option>
                        </select>
                        @error('jk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Upload Foto</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('foto') is-invalid @enderror"
                                    id="exampleInputFile" name="foto">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            @error('foto')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
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
                <h3 class="card-title">Foto Siswa</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <img src="{{ asset('storage/' . $data->foto) }}" alt="" style="max-width: 100%">
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">

            </div>
        </div>
    </div>
    @endforeach

@endsection
