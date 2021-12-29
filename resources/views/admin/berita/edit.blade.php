@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">edit Berita</div>
                    <div class="card-body">
                        <form action="{{ route('berita.update', $berita->id) }}" method="post">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="">Judul</label>
                                <input type="text" name="judul" value="{{ $berita->judul }}"
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
                                <textarea name="isi" value="{{ $berita->isi }}"
                                    class="form-control
                                    @error('isi') is-invalid @enderror"></textarea>

                                @error('isi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">id kategori</label>
                                <input type="text" name="id_kategori" value="{{ $berita->id_kategori }}"
                                    class="form-control
                                    @error('id_kategori') is-invalid @enderror">

                                @error('id_kategori')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">id_user</label>
                                <input type="text" name="id_user" value="{{ $berita->id_user }}"
                                    class="form-control
                                    @error('id_user') is-invalid @enderror">

                                @error('id user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Book</label>
                                <br>
                                <img src="{{ $berita->image() }}" height="75" style="padding:10px;" />
                                <input type="file" name="cover" value="{{ $berita->cover }}" class="form-control">
                            </div>

                            </div>
                            <div class="form-group">
                                <label for="">komentar</label>
                                <input type="text" name="komentar" value="{{ $berita->komentar }}"
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