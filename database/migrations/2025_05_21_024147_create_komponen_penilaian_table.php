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
       Schema::create('komponen_penilaian', function (Blueprint $table) {
    $table->id();
    $table->foreignId('dosen_id')->constrained()->onDelete('cascade');
    $table->foreignId('mata_kuliah_id')->constrained()->onDelete('cascade');
    $table->string('komponen'); // Kehadiran, Tugas, Quiz, UTS, UAS
    $table->float('persentase'); // Total max 100%
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komponen_penilaian');
    }
};
