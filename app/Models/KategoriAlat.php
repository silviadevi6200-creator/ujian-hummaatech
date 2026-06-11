<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriAlat extends Model
{
    protected $fillable = [
        'nama_kategori',
        'keterangan'
    ];

    public function alat()
    {
        return $this->hasMany(Alat::class, 'kategori_id');
    }
}