@extends('layout.master')
@section('tittle', 'form Galerry')
@section('content')
   <div class="container">
        <div class="row">
            <div class="col-12">
                <br><br>
                <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="produks_id">Produk</label>
                        <select name="produks_id" required class="form-control">
                            {{-- <option value="">Pilih Produk</option> --}}
                            @foreach($produk as $tampil)
                                <option value="{{ $tampil->id }}" {{old('produks_id') == "$tampil->produk" ? 'selected' : ''}}>
                                    {{ $tampil->produk }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_gambar">Nama Gambar</label>
                        <input type="text" class="form-control" @error('nama_gambar') is-invalid @enderror id="nama_gambar" name="nama_gambar" value="{{old('nama_gambar')}}">
                        @error('nama_gambar')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" name="image" id="image">
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
