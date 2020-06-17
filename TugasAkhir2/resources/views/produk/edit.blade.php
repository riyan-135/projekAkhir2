@extends('layout.master')
@section('tittle', 'form deskripsi')
@section('content')
   <div class="container">
        <div class="row">
            <div class="col-12">
                <br><br>
                <form method="post" action="/produk/{{ $produk->id }}">
                    @method('patch')
                    @csrf

                    <div class="form-group">
                      <label for="produk">Produk</label>
                      <input type="text" class="form-control @error('produk') is-invalid @enderror" id="produk" placeholder="Masukan Nama Produk" name="produk" value="{{ $produk->produk }}">
                        @error('produk')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" rows="10">{{ $produk->deskripsi }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" placeholder="Masukan Type" name="type" value="{{ $produk->type }}">
                        @error('type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Tambah Keterangan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
