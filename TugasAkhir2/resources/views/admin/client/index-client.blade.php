@extends('layout.master')
@section('title','Halaman Index')
{{-- @section('IndexClient', 'active') --}}
@section('content')  
<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-12 col-6">
               
                <h3>TABEL DATA CLIENT</h3>
                <a href="/client/create" class="btn btn-info my-3">Tambah Data</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        {{ session('status') }}
                    </div>
                @endif

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Client</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($client as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nama_client }}</td>
                                <td>
                                  <img src="{{ Storage::url($data->gambar) }}" alt="" style="width:120px;">
                                </td>
                                <td>
                                    <div class="row">
                                        <form action="{{ route('client.edit', $data->id ) }}" class="d-inline" method="POST">
                                            @csrf
                                            @method('GET')
                                            <button type="submit" class="btn btn-info m-2">Edit</button>
                                        </form>
                                        <form action="{{ route('client.destroy', $data->id ) }}" class="d-inline" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger m-2">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  </div>
  <!-- ./wrapper -->
@endsection 