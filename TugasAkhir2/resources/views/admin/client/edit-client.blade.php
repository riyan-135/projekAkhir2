@extends('layout.master')
@section('title','Halaman Edit')
{{-- @section('EditClient', 'active') --}}
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
               
                <h3 class="text-center">FORM EDIT</h3>
                <hr>
                <form action="{{ route('client.update', ['client' => $client->id]) }}" method="POST" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                      <label for="nama_client">Nama Client</label>
                      <input type="text" class="form-control @error('nama_client') is-invalid @enderror" id="nama_client" name="nama_client" value="{{ $client->nama_client }}">
                      @error('nama_client')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="gambar">Gambar</label>
                      <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar">
                      @error('gambar')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/client" class="btn btn-warning">Kembali</a>
                </form>

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