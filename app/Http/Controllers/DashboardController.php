<?php

namespace App\Http\Controllers;

use App\Models\KategoriAlat;
use App\Models\Alat;
use App\Models\Pelanggan;
use App\Models\Peminjaman;
use App\Models\Pengembalian;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'totalKategori'      => KategoriAlat::count(),
            'totalAlat'          => Alat::count(),
            'totalPelanggan'     => Pelanggan::count(),
            'totalPeminjaman'    => Peminjaman::count(),
            'totalPengembalian'  => Pengembalian::count(),
        ]);
    }
}