<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    protected $fillable = [
        'kategori_id',
        'nama_alat',
        'merk',
        'stok',
        'harga_sewa',
        'kondisi'
    ];

    public function kategori()
    {
        return $this->belongsTo(KategoriAlat::class, 'kategori_id');
    }

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }
}