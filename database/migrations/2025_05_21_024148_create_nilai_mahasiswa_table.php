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
       Schema::create('nilai_mahasiswa', function (Blueprint $table) {
    $table->id();
    $table->foreignId('mahasiswa_id')->constrained()->onDelete('cascade');
    $table->foreignId('mata_kuliah_id')->constrained()->onDelete('cascade');
    $table->string('komponen'); // Kehadiran, Tugas, Quiz, UTS, UAS
    $table->float('nilai'); // nilai antara 0-100
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_mahasiswa');
    }
};
