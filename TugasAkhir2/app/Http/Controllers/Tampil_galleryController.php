<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use Illuminate\Support\Facades\Storage;

class Tampil_galleryController extends Controller
{
    public function index(){

        $gallery = Produk::with(['galleries'])->get();

        return view('tampil.gallery',['gallery' => $gallery]);
    }
}
