<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GalleryRequest;
use Illuminate\Support\Facades\Storage;
use App\Gallery;
use App\Produk;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Gallery::with(['produk'])->get();
        return view('gallery.index',['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produk = Produk::all();
        return view('gallery.create', ['produk' => $produk]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/gallery', 'public'
        );

        Gallery::create($data);
        session()->flash('tambah',"Data {$data['nama_gambar']} Gambar Berhasil Disimpan!");
        return redirect()->route('gallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = Gallery::findOrFail($id);
        $product = Produk::all();

        return view('gallery.edit',['items' => $items, 'product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $tampung = $gallery->find($gallery->id);
        $data = $request->all();
        if($request->image){
            Storage::delete('public/'.$tampung->image);
            $data['image'] = $request->file('image')->store(
                'assets/gallery', 'public'
            );
        }

        // $item = Gallery::findOrFail($id);

        $tampung->update($data);
        session()->flash('edit',"Data {$data['nama_gambar']} Berhasil Di Edit!");
        return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Gallery::findorFail($id);
        $item->delete();

        return redirect()->route('gallery.index');
    }
}
