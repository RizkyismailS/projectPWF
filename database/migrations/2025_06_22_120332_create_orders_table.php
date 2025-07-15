<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // Kolom ID
            $table->string('order_code')->unique(); // Tambahkan kode order unik
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Kolom user_id yang terhubung ke tabel users
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade'); // Kolom product_id yang terhubung ke tabel products
            $table->integer('quantity'); // Kolom untuk jumlah produk
            $table->decimal('total_price', 10, 2); // Kolom untuk total harga
            $table->string('status')->default('pending'); // Kolom untuk status pesanan
            $table->string('name_on_card')->nullable(); // Kolom untuk nama pada kartu
            $table->string('card_number')->nullable(); // Kolom untuk nomor kartu
            $table->string('expiration_date')->nullable(); // Kolom untuk tanggal kedaluwarsa
            $table->timestamps(); // Kolom untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
