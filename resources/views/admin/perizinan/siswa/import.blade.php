@extends('admin.template')
@section('container')
    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Import Siswa Berkelompok</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <div class="card-body">
                <h1>Penting!!!</h1>
                <h4>Silahkan download template dibawah ini untuk melakukan pendaftaran siswa secara berkelompok</h4>
                <br>
                <a href="/assets/format_regis.xlsx">
                    <button class="btn btn-success">Download Excel</button>
                </a>
                <br>
                <br>
                <h3>Keterangan Masing-masing kolom :</h3>
                <ul>
                    <li style="font-size: 1.3rem">Untuk Header jangan diganti biarkan seperti yang di template</li>
                    <li style="font-size: 1.3rem">Kolom nama di isi dengan nama siswa yang akan diizinkan</li>
                    <li style="font-size: 1.3rem">Kolom kelas di isi dengan kelas siswa yang akan diizinkan</li>
                    <li style="font-size: 1.3rem">Kolom angkatan di isi dengan angkatan siswa yang akan diizinkan</li>
                    <li style="font-size: 1.3rem">Penulisan nama angkatan sebagai berikut : </li>
                    <ul>
                        <li style="font-size: 1.2rem">Divrine</li>
                        <li style="font-size: 1.2rem">Ismaya</li>
                        <li style="font-size: 1.2rem">Fervent</li>
                        <li style="font-size: 1.2rem">Kelas 10</li>
                    </ul>
                    <li style="font-size: 1.3rem">Kolom jk di isi dengan jenis kelamin siswa yang akan diizinkan</li>
                    <ul>
                        <li style="font-size: 1.2rem">"l" untuk laki-laki</li>
                        <li style="font-size: 1.2rem">"p" untuk perempuan</li>
                        
                    </ul>
                    <li style="font-size: 1.3rem">Jika sudah sesuai silahkan mengupload filenya :)</li>
                </ul>
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
                
            </div>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Import Siswa Berkelompok</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="/admin/perizinan_siswa/import" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputFile">Upload File</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('file') is-invalid @enderror"
                                    id="exampleInputFile" name="file">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            @error('file')
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
