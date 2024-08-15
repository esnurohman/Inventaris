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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('nama_supplier');
            $table->string('alamat');
            $table->string('nomor_telepon')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
//             ID Supplier: Nomor unik yang mengidentifikasi setiap supplier.
// Nama Supplier: Nama supplier.
// Alamat: Alamat supplier.
// Nomor Telepon: Nomor telepon supplier.
// Email: Alamat email supplier.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};