@extends('admin.template')
@section('container')
    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Perizinan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="/admin/perizinan" enctype="multipart/form-data">
                @csrf
                @foreach ($data as $d)
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Id Siswa</label>
                        <input type="text" class="form-control @error('regis_siswa_izin_id') is-invalid @enderror" id="regis_siswa_izin_id"
                            placeholder="Input regis_siswa_izin_id" name="regis_siswa_izin_id" value="{{ old('regis_siswa_izin_id', $d->id) }}" readonly="readonly" required>
                        @error('regis_siswa_izin_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                            placeholder="Input nama" name="nama" value="{{ old('nama', $d->nama_siswa) }}" readonly="readonly" required>
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Slug</label>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                            placeholder="Slug" name="slug" value="{{ old('slug', $d->slug) }}" readonly="readonly">
                        @error('slug')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Kelas</label>
                        <input type="text" class="form-control @error('kelas') is-invalid @enderror" id=""
                            placeholder="Input kelas" value="{{ old('kelas', $d->kelas) }}" name="kelas" readonly="readonly" required>
                        @error('kelas')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Angkatan</label>
                        <input type="text" class="form-control @error('angkatan') is-invalid @enderror" id=""
                            placeholder="Input angkatan" value="{{ old('angkatan', $d->angkatan) }}" name="angkatan" readonly="readonly" required>
                        @error('angkatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control select2bs4" style="width: 100%;" name="kategori" required>
                            <option selected="" value="OSPACE">OSPACE</option>
                            <option selected="" value="LKTI">LKTI</option>
                            <option selected="" value="MULMED">MULMED</option>
                            <option selected="" value="GALAXY">GALAXY</option>
                        </select>
                        @error('kategori')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Keterangan Izin</label>
                        <textarea class="form-control @error('keterangan') is-invalid @enderror" id="" rows="3" name="keterangan" value=""
                            required>{{ old('keterangan') }}</textarea>
                        @error('keterangan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Waktu Mulai</label>
                        <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input"
                                data-target="#reservationdatetime" name="waktu_mulai"/>
                            <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Waktu Selesai</label>
                        <div class="input-group date" id="reservationdatetime2" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input"
                                data-target="#reservationdatetime2" name="waktu_selesai"/>
                            <div class="input-group-append" data-target="#reservationdatetime2" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
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
                @endforeach
            </form>
        </div>
    </div>
    <script>
        const nama = document.querySelector('#nama');
        const slug2 = document.querySelector('#slug');

        nama.addEventListener('change', function() {
            fetch('/admin/perizinan/check_slug?nama=' + nama.value)
                .then(response => response.json())
                .then(data => slug2.value = data.slug)
        });
    </script>

@endsection
