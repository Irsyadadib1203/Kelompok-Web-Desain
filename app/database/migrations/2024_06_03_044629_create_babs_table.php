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
        Schema::create('babs', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->unsignedBigInteger('pelajaran_id');
            $table->foreign('pelajaran_id')->references('id')->on('pelajarans');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('babs');
    }
};
