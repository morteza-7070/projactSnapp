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
        Schema::create('rataurant_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image_restaurant')->nullable();
            $table->string('mime')->default('image/jpeg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rataurant_categories');
    }
};
