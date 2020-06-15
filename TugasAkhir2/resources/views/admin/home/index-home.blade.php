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
               
                <h3>TENTANG KAMI</h3>
                <a href="/home/create" class="btn btn-info my-3">Tambah Tentang</a>

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
                            <th scope="col">Title</th>
                            <th scope="col">Font-Size Title</th>
                            <th scope="col">Sub Title</th>
                            <th scope="col">Font-Size Sub Title</th>
                            <th scope="col">Visi</th>
                            <th scope="col">Misi</th>
                            <th scope="col">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($home as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->title }}</td>
                                <td>{{ $data->fontsize_title }}</td>
                                <td>{{ $data->subtitle }}</td>
                                <td>{{ $data->fontsize_subtitle }}</td>
                                <td>{{ $data->visi }}</td>
                                <td>{{ $data->misi }}</td>
                                <td>
                                    <div class="row">
                                        <form action="{{ route('home.edit', $data->id ) }}" class="d-inline" method="POST">
                                            @csrf
                                            @method('GET')
                                            <button type="submit" class="btn btn-info m-2">Edit</button>
                                        </form>
                                        <form action="{{ route('home.destroy', $data->id ) }}" class="d-inline" method="POST">
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