@extends('layout.master')
@section('tittle', 'produk')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-3">Table Produk</h1>

                <a href="{{ url('/admin/produk/create') }}" class="btn btn-success my-3"><i class="fas fa-plus"></i>Tambah Data</a>

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
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Type</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <tbody>
                        @foreach($produk as $tampil)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$tampil->produk}}</td>
                                <td>{{$tampil->deskripsi}}</td>
                                <td>{{$tampil->type}}</td>
                                <td class="project-actions">
                                    <form action="{{ route ('produk.edit', $tampil->id) }}" method="post" class="d-inline">
                                        @method('GET')
                                        @csrf
                                        <button type="submit" class="btn btn-primary btn-sm"> <i class="fas fa-pencil-alt"></i></button>
                                    </form>
                                    <form action="{{ route ('produk.destroy', $tampil->id) }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
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
