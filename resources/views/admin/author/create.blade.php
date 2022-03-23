@extends('admin.template')
@section('container')
    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Postingan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="/admin/author" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                            placeholder="Input nama" name="nama" value="{{ old('nama') }}" required>
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Jabatan</label>
                        <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan"
                            placeholder="Input jabatan" name="jabatan" value="{{ old('jabatan') }}" required>
                        @error('jabatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Deskripsi Singkat</label>
                        <textarea class="form-control @error('des_singkat') is-invalid @enderror" id="editor" rows="3" name="des_singkat"
                            value="" required>{{ old('des_singkat') }}</textarea>
                        @error('des_singkat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Instagram</label>
                        <input type="text" class="form-control @error('instagram') is-invalid @enderror" id="instagram"
                            placeholder="Input link instagram (sertakan https:// didepannya)" name="instagram"
                            value="{{ old('instagram') }}" required>
                        @error('instagram')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Facebook</label>
                        <input type="text" class="form-control @error('facebook') is-invalid @enderror" id="facebook"
                            placeholder="Input link facebook (sertakan https:// didepannya)" name="facebook"
                            value="{{ old('facebook') }}" required>
                        @error('facebook')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Twitter</label>
                        <input type="text" class="form-control @error('twitter') is-invalid @enderror" id="twitter"
                            placeholder="Input link twitter (sertakan https:// didepannya)" name="twitter"
                            value="{{ old('twitter') }}" required>
                        @error('twitter')
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
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        </div>
        <!-- /.card-body -->
        </form>
    </div>
    </div>

@endsection
