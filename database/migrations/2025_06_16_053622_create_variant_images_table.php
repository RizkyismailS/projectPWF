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
        Schema::create('variant_image', function (Blueprint $table) {
            $table->id();
            $table->foreignId('variant_id')->constrained('variant')->onDelete('cascade');
            $table->string('image_path'); // Path to the image file
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variant_image');
    }
};
