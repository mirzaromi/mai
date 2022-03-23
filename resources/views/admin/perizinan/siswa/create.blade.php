@extends('admin.template')
@section('container')
    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Siswa</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="/admin/perizinan_siswa" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control @error('nama_siswa') is-invalid @enderror" id="nama_siswa"
                            placeholder="Input nama_siswa" name="nama_siswa" value="{{ old('nama_siswa') }}" required>
                        @error('nama_siswa')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Slug</label>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                            placeholder="Slug" name="slug" value="{{ old('slug') }}" readonly="readonly">
                        @error('slug')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Kelas</label>
                        <input type="text" class="form-control @error('kelas') is-invalid @enderror" id=""
                            placeholder="Input kelas" value="{{ old('kelas') }}" name="kelas" required>
                        @error('kelas')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Angkatan</label>
                        <select class="form-control select2bs4" style="width: 100%;" name="angkatan" required>
                            <option selected="" value="kelas 10">Kelas 10</option>
                            <option selected="" value="ismaya">Ismaya</option>
                            <option selected="" value="fervent">Fervent</option>
                            <option selected="" value="divrine">Divine</option>
                        </select>
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
                    {{-- <div class="form-group">
                        <label>Author</label>
                        <select class="form-control @error('author_id') is-invalid @enderror select2bs4" style="width: 100%;"
                            value="{{ old('author_id') }}" name="author_id" required>
                            @foreach ($author as $a)
                                <option selected="@error('author_id') selected @enderror" value="{{ $a->id }}">{{ $a->nama }}</option>
                            @endforeach
                        </select>
                        @error('author_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div> --}}
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        const nama_siswa = document.querySelector('#nama_siswa');
        const slug2 = document.querySelector('#slug');

        nama_siswa.addEventListener('change', function() {
            fetch('/admin/perizinan_siswa/check_slug?nama_siswa=' + nama_siswa.value)
                .then(response => response.json())
                .then(data => slug2.value = data.slug)
        });
    </script>

@endsection
