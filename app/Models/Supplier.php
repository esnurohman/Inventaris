<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = ['nama_supplier', 'alamat', 'nomor_telepon', 'email'];

    public function barang(): HasMany
    {
        return $this->hasMany(Barang::class);
    }
    public function riwayatTransaksi(): HasMany
    {
        return $this->hasMany(RiwayatTransaksi::class);
    }
}