<?php

namespace App\Http\Controllers;

use App\Models\KategoriAlat;
use Illuminate\Http\Request;

class KategoriAlatController extends Controller
{
    public function index()
    {
        $kategori = KategoriAlat::all();
        return view('kategori_alat.index', compact('kategori'));
    }

    public function create()
    {
        return view('kategori_alat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required',
            'keterangan' => 'required'
        ]);

        KategoriAlat::create([
            'nama_kategori' => $request->nama_kategori,
            'keterangan' => $request->keterangan
        ]);

        return redirect()->route('kategori-alat.index')
            ->with('success', 'Data kategori berhasil ditambahkan');
    }

    public function show(KategoriAlat $kategoriAlat)
    {
        //
    }

    public function edit(KategoriAlat $kategoriAlat)
    {
        return view('kategori_alat.edit', compact('kategoriAlat'));
    }

    public function update(Request $request, KategoriAlat $kategoriAlat)
    {
        $request->validate([
            'nama_kategori' => 'required',
            'keterangan' => 'required'
        ]);

        $kategoriAlat->update([
            'nama_kategori' => $request->nama_kategori,
            'keterangan' => $request->keterangan
        ]);

        return redirect()->route('kategori-alat.index')
            ->with('success', 'Data kategori berhasil diubah');
    }

    public function destroy(KategoriAlat $kategoriAlat)
    {
        $kategoriAlat->delete();

        return redirect()->route('kategori-alat.index')
            ->with('success', 'Data kategori berhasil dihapus');
    }
}