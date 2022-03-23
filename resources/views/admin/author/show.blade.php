@extends('admin.template')
@section('container')
    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Postingan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="/admin/post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Author</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                            placeholder="Input nama" name="nama" value="{{ old('nama', $author->nama) }}" readonly="readonly" required>
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Jabatan Author</label>
                        <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan"
                            placeholder="jabatan" name="jabatan" value="{{ old('jabatan', $author->jabatan) }}" readonly="readonly">
                        @error('jabatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Desripsi Singkat Author</label>
                        <textarea class="form-control @error('des_singkat') is-invalid @enderror" id="editor" rows="6" name="des_singkat"
                            value="{{ old('des_singkat') }}" readonly="readonly" required>{{ $author->des_singkat }}</textarea>
                        @error('des_singkat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Instagram</label>
                        <input type="text" class="form-control @error('instagram') is-invalid @enderror" id=""
                            placeholder="Input instagram" value="{{ old('instagram', $author->instagram) }}" name="instagram" readonly="readonly" required>
                        @error('instagram')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Facebook</label>
                        <input type="text" class="form-control @error('facebook') is-invalid @enderror" id=""
                            placeholder="Input facebook" value="{{ old('facebook', $author->facebook) }}" name="facebook" readonly="readonly" required>
                        @error('facebook')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Twitter</label>
                        <input type="text" class="form-control @error('twitter') is-invalid @enderror" id=""
                            placeholder="Input twitter" value="{{ old('twitter', $author->twitter) }}" name="twitter" readonly="readonly" required>
                        @error('twitter')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Gambar Postingan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <img src="{{ asset('storage/' . $author->foto) }}" alt="" style="max-width: 100%">
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">

            </div>
        </div>
    </div>


@endsection
