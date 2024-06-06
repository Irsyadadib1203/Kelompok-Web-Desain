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
        Schema::create('materis', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('pelajaran_id');
        $table->string('judul_materi');
        $table->text('isi_materi');
        $table->timestamps();

        $table->foreign('pelajaran_id')->references('id')->on('pelajarans')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materis');
    }
};
