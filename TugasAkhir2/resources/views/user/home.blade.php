@extends('FrontLayout.master-view')
@section('title','Halaman Home')
@section('content')  

<div class="container-fluid" id="subhead">
    <div class="row">
        <div class="col-sm-12 text-center">
            @foreach ($home as $homes)
            <p style="font-size: {{ $homes->fontsize_title }}px; color:white; line-height: 50px;" id="text1">{{ $homes->title }}</p>
            <p style="font-size: {{ $homes->fontsize_subtitle }}px; color:white; line-height: 20px;">{{ $homes->subtitle }}</p>
            @endforeach
        </div>
    </div>
</div>

<div class="container" id="text2">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h3>Tentang Kami</h3><hr>
        </div>
    </div>
    <div class="row">
        @foreach ($home as $homes)
        <div class="col-sm-6">
        {{ $homes->visi }}
        </div>
        <div class="col-sm-6">
        {{ $homes->misi }}
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