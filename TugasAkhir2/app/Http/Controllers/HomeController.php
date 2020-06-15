<?php

namespace App\Http\Controllers;

use App\Model\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home = Home::all();
        return view('admin.home.index-home', compact('home'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home.create-home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'fontsize_title' => 'required',
            'subtitle' => 'required',
            'fontsize_subtitle' => 'required',
            'visi' => 'required',
            'misi' => 'required'
        ]);

        Home::create($validateData);
        return redirect('/home')->with('status', "Data berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $home = Home::find($id);
        return view ('admin.home.edit-home', compact('home'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        Home::where('id', $home->id)->update([
            "title" => $request->title,
            "fontsize_title" => $request->fontsize_title,
            "subtitle" => $request->subtitle,
            "fontsize_subtitle" => $request->fontsize_subtitle,
            "visi" => $request->visi,
            "misi" => $request->misi       
        ]);
        return redirect('/home')->with('status', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy($home)
    {
        $home = Home::findorFail($home)->delete();
        return redirect('/home')->with('status', 'Data berhasil di hapus');
    }
}
