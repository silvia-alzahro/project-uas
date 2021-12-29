@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">add Berita</div>
                    <div class="card-body">
                        <form action="{{ route('berita.store') }}" method="post"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Judul</label>
                                <input type="text" name="judul"
                                    class="form-control
                                    @error('judul') is-invalid @enderror">

                                @error('judul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Isi</label>
                                <textarea name="isi" class="form-control summernote
                                    @error('isi') is-invalid @enderror"></textarea>

                                @error('isi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Kategori</label>
                                <select name="id_kategori" class="form-control @error('id_kategori') is-invalid @enderror">
                                    <option value="">Pilih Kategori</option>
                                    @foreach ($kategori as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                                    @endforeach
                                </select>
                                @error('nama_kategori')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">id_user</label>
                                <input type="text" name="id_user"  class="form-control
                                    @error('id_user') is-invalid @enderror">

                                @error('id_user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                    <div class="form-group">
                        <label for="">Cover</label>
                        <input type="file" name="cover" class="form-control @error('cover')
                            is-invalid
                        @enderror">
                        @error('cover')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                            <div class="form-group">
                                <label for="">komentar</label>
                                <input type="text" name="komentar"
                                    class="form-control
                                    @error('komentar') is-invalid @enderror">

                                @error('komentar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <br>
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <button type="submit" class="btn btn-outline-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection