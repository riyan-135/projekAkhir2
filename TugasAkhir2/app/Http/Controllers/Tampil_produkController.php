<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use Illuminate\Support\Facades\Storage;

class Tampil_produkController extends Controller
{

    public function index()
    {
        $produk = Produk::with(['galleries'])->get();

        return view('tampil.produk',['produk' => $produk]);
    }
}
