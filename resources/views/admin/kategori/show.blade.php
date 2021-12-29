@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">add Kategori</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama Kategori</label>
                            <input type="text" name="nama_kategori" class="form-control" value="{{ $kategori->nama_kategori }}"
                                readonly>
                        </div>
                        <div class="form-group">
                            <br>
                            <a href="{{ route('berita.index', $data->id) }}" class="btn btn-block btn-outline-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection