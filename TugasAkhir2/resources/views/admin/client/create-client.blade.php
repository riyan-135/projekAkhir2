@extends('layout.master')
@section('title','Halaman Create')
{{-- @section('CreateClient', 'active') --}}
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
              
              <h3 class="text-center">FORM CREATE</h3>
                <hr>
                <form action="/client" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama_client">Nama Client</label>
                        <input type="text" class="form-control" id="nama_client"  placeholder="Masukkan Nama Client" name="nama_client" value="{{ old('nama_client') }}">
                        @error('nama_client')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" name="gambar" id="gambar" class="form-control" placeholder="Masukkan Gambar" value="{{ old('gambar') }}">
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