@extends('layout.master')
@section('tittle', 'Gallery')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-3">Gallery</h1>

                <a href="{{ url('/admin/gallery/create ') }}" class="btn btn-success my-3"><i class="fas fa-plus"></i>Tambah Image</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <br><br>
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Produk</th>
                    <th scope="col">Nama Gambar</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <tbody>
                        @foreach($items as $tampil)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$tampil->produk->produk}}</td>
                                <td>{{$tampil->nama_gambar}}</td>
                                <td>
                                    <img src="{{ '/storage/'.$tampil->image }}" alt="" style="width: 200px" class="img-thumbnail">
                                </td>
                                <td class="project-actions">
                                    <form action="{{ route ('gallery.edit', $tampil->id) }}" method="post" class="d-inline">
                                        @method('GET')
                                        @csrf
                                        <button type="submit" class="btn btn-primary btn-sm"> <i class="fas fa-pencil-alt">Edit</i></button>
                                    </form>
                                    <form action="{{ route ('gallery.destroy', $tampil->id) }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash">Delete</i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection
