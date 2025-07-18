<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('users', function (Blueprint $table) {
        @$table->id(); // Use auto-incrementing ID
        $table->string('name');
        $table->string('nama_perusahaan')->nullable();
        $table->string('email')->unique();
        $table->string('password');
        $table->string('phone')->nullable();
        $table->string('address')->nullable();
        $table->string('profile_picture')->nullable();
        $table->string('type')->nullable(); // client/supplier/admin
        $table->rememberToken();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
