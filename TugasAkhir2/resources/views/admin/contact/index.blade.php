@extends('layout.master')
@section('content')
    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Input Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">pesan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>
                <a href="{{ route('contact.create') }}"><button type="submit" class="btn btn-outline-success">Tambah Data</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="container bg-white">
                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                                <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">No HP</th>
                                        <th scope="col">Email</th>
                                        {{-- <th scope="col">Home</th>
                                        <th scope="col">Produk</th>
                                        <th scope="col">Client</th>
                                        <th scope="col">Contact</th> --}}
                                        {{-- <th scope="col">Location</th> --}}
                                        <th scope="col">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($contact as $item)    
                                      <tr>
                                        <td>{{ $item->alamat }}</td>
                                        <td>{{ $item->no_hp }}</td>
                                        <td>{{ $item->email }}</td>
                                        {{-- <td>{{ $item->home }}</td>
                                        <td>{{ $item->produk }}</td>
                                        <td>{{ $item->client }}</td>
                                        <td>{{ $item->contact }}</td> --}}
                                        {{-- <td style="border">{{ $item->location }}</td> --}}
                                        <td>
                                            <form action="{{ route('contact.edit', $item->id) }}" class="d-inline" method="POST">
                                                @csrf
                                                @method("GET")
                                                <button type="submit" class="btn btn-success"><i class="fa fa-edit" style="font-size:24px;color: white"></i></button>
                                              </form>
                                        </td>
                                      </tr>
                                      @endforeach  
                                    </tbody>
                                  </table>
                        </div>
                    </div>
                </div>                  
              </div>
            {{-- //table kedua --}}
            
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
   
    <!-- /.content -->
</div>

@endsection