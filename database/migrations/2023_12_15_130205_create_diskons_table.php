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
        Schema::create('diskons', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->decimal('harga_barang', 17, 5);
            $table->string('gambar')->nullable();
            $table->text('deskripsi');
            $table->integer('diskon');
            $table->enum('kategori', ['Ruangan', 'Material', 'Dekorasi'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diskons');
    }
};
