<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Pelanggan;
use App\Models\Alat;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = Peminjaman::with(['pelanggan', 'alat'])->get();

        return view('peminjaman.index', compact('peminjaman'));
    }

    public function create()
    {
        $pelanggan = Pelanggan::all();
        $alat = Alat::all();

        return view('peminjaman.create', compact('pelanggan', 'alat'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pelanggan_id' => 'required',
            'alat_id' => 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required',
            'jumlah' => 'required|integer|min:1',
        ]);

        Peminjaman::create([
            'pelanggan_id' => $request->pelanggan_id,
            'alat_id' => $request->alat_id,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'jumlah' => $request->jumlah,
            'status' => 'Dipinjam',
        ]);

        return redirect()->route('peminjaman.index')
            ->with('success', 'Data peminjaman berhasil ditambahkan');
    }

    public function show(Peminjaman $peminjaman)
    {
        //
    }

    public function edit(Peminjaman $peminjaman)
    {
        $pelanggan = Pelanggan::all();
        $alat = Alat::all();

        return view('peminjaman.edit', compact('peminjaman', 'pelanggan', 'alat'));
    }

    public function update(Request $request, Peminjaman $peminjaman)
    {
        $request->validate([
            'pelanggan_id' => 'required',
            'alat_id' => 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required',
            'jumlah' => 'required|integer|min:1',
        ]);

        $peminjaman->update([
            'pelanggan_id' => $request->pelanggan_id,
            'alat_id' => $request->alat_id,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'jumlah' => $request->jumlah,
        ]);

        return redirect()->route('peminjaman.index')
            ->with('success', 'Data peminjaman berhasil diubah');
    }

    public function destroy(Peminjaman $peminjaman)
    {
        $peminjaman->delete();

        return redirect()->route('peminjaman.index')
            ->with('success', 'Data peminjaman berhasil dihapus');
    }
}