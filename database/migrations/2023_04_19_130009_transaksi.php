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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->bigIncrements('TransaksiID');
            $table->date('Tanggal');
            $table->string('Tipe');
            $table->unsignedBigInteger('IdKategori');
            $table->integer('Jumlah');
            $table->string('Judul');
            $table->timestamps();

            $table->foreign('IdKategori')->references('KategoriID')->on('kategori');
        
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
