<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RiwayatTransaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'barang_id',
        'tanggal_transaksi',
        'jenis',
        'jumlah',
        'nominal',
        'keterangan',
    ];

    public function barang(): HasMany
    {
        return $this->hasMany(Barang::class, 'barang_id')->with('barang');
    }
    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }
}