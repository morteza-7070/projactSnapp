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
        Schema::create('connectioanbels', function (Blueprint $table) {
            $table->unsignedBigInteger('connection_id');
            $table->foreign('connection_id')->references('id')->on('connections')->onDelete('cascade')->onUpdate('cascade');
            $table->morphs('connectioanbels');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('connectioanbels');
    }
};
