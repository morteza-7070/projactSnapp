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
        Schema::create('banners', function (Blueprint $table) {

//            $table->text('image_banners')->nullable();
//            $table->binary('images')->nullable();
//            $table->text('images2')->nullable();
            $table->id();
            $table->string('file');
            $table->string('mime')->default('image/jpeg');
            $table->timestamps();


        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
