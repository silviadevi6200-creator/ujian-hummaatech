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
    Schema::create('peminjamans', function (Blueprint $table) {
        $table->id();

        $table->foreignId('pelanggan_id')
              ->constrained('pelanggans')
              ->onDelete('cascade');

        $table->foreignId('alat_id')
              ->constrained('alats')
              ->onDelete('cascade');

        $table->date('tanggal_pinjam');
        $table->date('tanggal_kembali');
        $table->integer('jumlah');
        $table->string('status');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamans');
    }
};
