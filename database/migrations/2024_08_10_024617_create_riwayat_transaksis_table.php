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
        Schema::create('riwayat_transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('barang_id')->constrained('barangs')->references('id')->onDelete('cascade');
            $table->date('tanggal_transaksi');
            $table->enum('jenis', ['masuk', 'keluar', 'transfer'])->default('masuk');
            $table->integer('jumlah');
            $table->bigInteger('nominal');
            $table->string('keterangan');
            $table->timestamps();

//             ID Transaksi: Nomor unik yang mengidentifikasi setiap transaksi.
// ID Barang: Nomor ID barang yang terlibat dalam transaksi.
// Tanggal Transaksi: Tanggal transaksi.
// Jenis Transaksi: Jenis transaksi (masuk, keluar, transfer).
// Jumlah: Jumlah barang yang terlibat dalam transaksi.
// Keterangan: Keterangan tambahan mengenai transaksi.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_transaksis');
    }
};