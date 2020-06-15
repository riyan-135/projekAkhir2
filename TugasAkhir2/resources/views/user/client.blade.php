@extends('FrontLayout.master-view')
@section('title','Halaman Client')
@section('content')  

<div class="container-fluid" id="subhead">
    <div class="row">
        <div class="col-sm-12 text-center">
            <p style="font-size: 50px; color:white; line-height: 50px;" id="text1">
                Client
            </p>
        </div>
    </div>
</div>

<div class="container" id="text2">
    <div class="row">
        @foreach ($client as $clients)
        <div class="col-sm-4">
            <img src="{{ Storage::url($clients->gambar) }}" alt="" id="gambar">
            <p>{{ $clients->nama_client }}</p>
        </div>
        @endforeach
    </div>
</div>

{{-- <div class="container-fluid" id="subfoot">
    <div class="row">
        <div class="col-sm-12 text-center">
            <p style="font-size: 50px; color:white; line-height: 50px;" id="text1">
                Lihat Produk Kami
            </p>
            <button><a href="#">Lihat</a></button>
        </div>
    </div>
</div> --}}

@endsection 