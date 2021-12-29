<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::all();
        return view('admin.berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('admin.berita.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'id_kategori' => 'required',
            'id_user' => 'required',
            'cover' => 'required|image|max:2048',
            'komentar' => 'required',
        ]);
        $berita = new Berita;
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->id_kategori = $request->id_kategori;
        $berita->id_user = $request->id_user;
        if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/beritas/', $name);
            $berita->cover = $name;
        }
        $berita->komentar = $request->komentar;
        $berita->save();
        return redirect()->route('berita.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.show', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'id_kategori' => 'required',
            'id_user' => 'required',
            'cover' => 'required',
            'komentar' => 'required',
        ]);

        $berita = Berita::findOrFail($id);
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->id_kategori = $request->id_kategori;
        $berita->id_user = $request->id_user;
        if ($request->hasFile('cover')) {
            $berita->deleteImage();
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/beritas/', $name);
            $berita->cover = $name;
        }
        $berita->komentar = $request->komentar;
        $berita->save();
        return redirect()->route('berita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();
        return redirect()->route('berita.index');

    }
}
