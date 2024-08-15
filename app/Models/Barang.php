<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = ['nama_barang', 'kategori_id', 'merek', 'model', 'jumlah', 'satuan', 'lokasi', 'kondisi', 'tanggal_pembelian', 'harga_beli', 'supplier_id', 'foto'];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }

    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }

    public function riwayatTransaksi(): BelongsTo
    {
        return $this->belongsTo(RiwayatTransaksi::class);
    }
}