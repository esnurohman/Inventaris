<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->foreignId('kategori_id')->constrained('kategoris')->references('id')->onDelete('cascade');
            $table->string('merek');
            $table->string('model');
            $table->integer('jumlah');
            $table->string('satuan');
            $table->string('lokasi');
            $table->enum('kondisi', ['baik', 'rusak', 'hilang'])->default('baik')->nullable();
            $table->date('tanggal_pembelian');
            $table->bigInteger('harga_beli');
            $table->foreignId('supplier_id')->constrained('suppliers')->onDelete('cascade');
            $table->string('foto')->nullable();
            $table->timestamps();

                // ID Barang: Nomor unik yang mengidentifikasi setiap barang.
                // Nama Barang: Nama atau deskripsi barang.
                // Kategori: Kategori barang (misalnya: peralatan kantor, peralatan produksi, perlengkapan IT).
                // Merek: Merek barang.
                // Model: Model barang.
                // Jumlah: Jumlah barang yang tersedia.
                // Satuan: Satuan barang (misalnya: buah, set, liter).
                // Lokasi: Lokasi penyimpanan barang.
                // Kondisi: Kondisi barang (baik, rusak, hilang).
                // Tanggal Pembelian: Tanggal pembelian barang.
                // Harga Beli: Harga pembelian barang.
                // Supplier: Nama supplier yang memasok barang.
                // Foto Barang: Link ke foto barang (jika ada).
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};