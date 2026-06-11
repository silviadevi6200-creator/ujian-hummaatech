<?php

namespace App\Http\Controllers;

use App\Models\Pengembalian;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function index()
    {
        $pengembalian = Pengembalian::with([
            'peminjaman.pelanggan',
            'peminjaman.alat'
        ])->get();

        return view('pengembalian.index', compact('pengembalian'));
    }

    public function create()
    {
        $peminjaman = Peminjaman::all();

        return view('pengembalian.create', compact('peminjaman'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'peminjaman_id' => 'required',
            'tanggal_pengembalian' => 'required|date',
            'denda' => 'required|numeric|min:0',
            'keterangan' => 'required'
        ]);

        Pengembalian::create([
            'peminjaman_id' => $request->peminjaman_id,
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
            'denda' => $request->denda,
            'keterangan' => $request->keterangan
        ]);

        $peminjaman = Peminjaman::find($request->peminjaman_id);

        if ($peminjaman) {
            $peminjaman->update([
                'status' => 'Dikembalikan'
            ]);
        }

        return redirect()->route('pengembalian.index')
            ->with('success', 'Data pengembalian berhasil ditambahkan');
    }

    public function show(Pengembalian $pengembalian)
    {
        //
    }

    public function edit(Pengembalian $pengembalian)
    {
        $peminjaman = Peminjaman::all();

        return view('pengembalian.edit', compact('pengembalian', 'peminjaman'));
    }

    public function update(Request $request, Pengembalian $pengembalian)
    {
        $request->validate([
            'peminjaman_id' => 'required',
            'tanggal_pengembalian' => 'required|date',
            'denda' => 'required|numeric|min:0',
            'keterangan' => 'required'
        ]);

        $pengembalian->update([
            'peminjaman_id' => $request->peminjaman_id,
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
            'denda' => $request->denda,
            'keterangan' => $request->keterangan
        ]);

        return redirect()->route('pengembalian.index')
            ->with('success', 'Data pengembalian berhasil diubah');
    }

    public function destroy(Pengembalian $pengembalian)
    {
        $pengembalian->delete();

        return redirect()->route('pengembalian.index')
            ->with('success', 'Data pengembalian berhasil dihapus');
    }
}