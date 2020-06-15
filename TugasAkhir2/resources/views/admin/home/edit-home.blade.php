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
                <form action="{{ route('home.update', ['home' => $home->id]) }}" method="POST">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <textarea name="title" placeholder="Masukkan Title" id="title" rows="2" class="form-control" >{{ $home->title }}</textarea>
                        @error('title')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="fontsize_title">Font-Size Title</label>
                      <input type="text" class="form-control" id="fontsize_title"  placeholder="Masukkan Ukuran Huruf" name="fontsize_title" value="{{ $home->fontsize_title }}">
                      @error('fontsize_title')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                        <label for="subtitle">Sub Title</label>
                        <textarea name="subtitle" placeholder="Masukkan Sub Title" id="subtitle" rows="2" class="form-control" >{{ $home->subtitle }}</textarea>
                        @error('subtitle')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="fontsize_subtitle">Font-Size Sub Title</label>
                      <input type="text" class="form-control" id="fontsize_subtitle"  placeholder="Masukkan Ukuran Huruf" name="fontsize_subtitle" value="{{ $home->fontsize_subtitle }}">
                      @error('fontsize_subtitle')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                        <label for="visi">Visi</label>
                        <textarea name="visi" placeholder="Masukkan Visi" id="visi" rows="3" class="form-control" >{{ $home->visi }}</textarea>
                        @error('visi')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="misi">Misi</label>
                        <textarea name="misi" placeholder="Masukkan Misi" id="misi" rows="3" class="form-control" >{{ $home->misi }}</textarea>
                        @error('misi')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/home" class="btn btn-warning">Kembali</a>
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