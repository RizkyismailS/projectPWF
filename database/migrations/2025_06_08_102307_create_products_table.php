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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('kode_produk')->unique();
            $table->text('deskripsi_produk')->nullable();
            $table->bigInteger('harga_produk')->default(0);
            $table->integer('stok_produk')->default(0);
            $table->string('gambar_produk')->nullable();
            $table->string('kategori_produk')->nullable();
            $table->enum('status_produk', ['baru', 'hot', 'recommended'])->default('baru');
            $table->enum('type', ['makanan', 'minuman', 'furniture'])->default('makanan');
            $table->decimal('discount', 5, 2)->default(0); 
            $table->timestamps();   
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
