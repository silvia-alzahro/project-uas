@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Berita
                    <a href="{{ route('berita.create') }}" class="btn btn-sm btn-info" style="float: right">
                    Tambah Data
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Isi</th>
                                <th>kategori</th>
                                <th>Penulis</th>
                                <th>Gambar artikel</th>
                                <th>Komentar</th>
                                <th>Action</th>
                            </tr>
                            @php $no = 1; @endphp
                            @foreach ($berita as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{ $data->judul }}</td>
                                <td>{{ $data->isi }}</td>
                                <td>{{ $data->kategori->nama_kategori}}</td>
                                <td>{{ $data->user->name}}</td>
                                <td><img src="{{ $data->image() }}" style="width:150px; height:150px;"
                                                alt="cover"></td>
                                <td>{{ $data->komentar}}</td>
                                
                                        <td>
                                            <form action="{{ route('berita.destroy', $data->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('berita.edit', $data->id) }}" class="btn btn-outline-success">Edit</a>
                                    <a href="{{ route('berita.show', $data->id) }}" class="btn btn-outline-warning">Show</a>
                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah Anda Yakin')">
                                    Delete
                                   </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </table>
                        </div>
                </div>
             </div>
          </div>
       </div>
    </div>
@endsection