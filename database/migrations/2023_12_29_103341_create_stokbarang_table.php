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
        Schema::create('stokbarang', function (Blueprint $table) {
            $table->bigIncrements('id_stok');
            $table->string('id_barang',255);
            $table->string('id_cabang',255);
            $table->string('jumlah');
            $table->string('tanggal_update');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stokbarang');
    }
};
