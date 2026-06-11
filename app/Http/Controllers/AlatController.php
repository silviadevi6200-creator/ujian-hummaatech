<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use App\Models\KategoriAlat;
use Illuminate\Http\Request;

class AlatController extends Controller
{
    public function index()
    {
        $alat = Alat::with('kategori')->get();
        return view('alat.index', compact('alat'));
    }

    public function create()
    {
        $kategori = KategoriAlat::all();
        return view('alat.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori_id' => 'required',
            'nama_alat' => 'required',
            'merk' => 'required',
            'stok' => 'required',
            'harga_sewa' => 'required',
            'kondisi' => 'required'
        ]);

        Alat::create([
            'kategori_id' => $request->kategori_id,
            'nama_alat' => $request->nama_alat,
            'merk' => $request->merk,
            'stok' => $request->stok,
            'harga_sewa' => $request->harga_sewa,
            'kondisi' => $request->kondisi
        ]);

        return redirect()->route('alat.index')
            ->with('success', 'Data alat berhasil ditambahkan');
    }

    public function show(Alat $alat)
    {
        //
    }

    public function edit(Alat $alat)
    {
        $kategori = KategoriAlat::all();
        return view('alat.edit', compact('alat', 'kategori'));
    }

    public function update(Request $request, Alat $alat)
    {
        $request->validate([
            'kategori_id' => 'required',
            'nama_alat' => 'required',
            'merk' => 'required',
            'stok' => 'required',
            'harga_sewa' => 'required',
            'kondisi' => 'required'
        ]);

        $alat->update([
            'kategori_id' => $request->kategori_id,
            'nama_alat' => $request->nama_alat,
            'merk' => $request->merk,
            'stok' => $request->stok,
            'harga_sewa' => $request->harga_sewa,
            'kondisi' => $request->kondisi
        ]);

        return redirect()->route('alat.index')
            ->with('success', 'Data alat berhasil diubah');
    }

    public function destroy(Alat $alat)
    {
        $alat->delete();

        return redirect()->route('alat.index')
            ->with('success', 'Data alat berhasil dihapus');
    }
}