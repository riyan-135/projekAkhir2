<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class DetailController extends Controller
{
    public function index(Request $request, $id)
    {
        $detail = Produk::with(['galleries'])->where('id', $id)->firstOrFail();
        return view('tampil.detail',['detail' => $detail]);
    }
}
