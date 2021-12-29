@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Kategori
                    <a href="{{ route('kategori.create') }}" class="btn btn-sm btn-info" style="float: right">
                    Tambah Data
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Action</th>
                            </tr>
                            @php $no = 1; @endphp
                            @foreach ($kategori as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{ $data->nama_kategori }}</td>
                            <td>
                                <form action="{{ route('kategori.destroy', $data->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('kategori.edit', $data->id) }}" class="btn btn-outline-success">Edit</a>
                                    <a href="{{ route('kategori.show', $data->id) }}" class="btn btn-outline-warning">Show</a>
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