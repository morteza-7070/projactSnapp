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
        Schema::create('category_food', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('image_food');
            $table->integer('price')->default(50000);
            $table->unsignedBigInteger('discount_id')->default(1);
            $table->foreign('discount_id')->references('id')->on('discounts')->OnDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_food');
    }
};
