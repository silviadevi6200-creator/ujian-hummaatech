<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
        'email'
    ];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }
}