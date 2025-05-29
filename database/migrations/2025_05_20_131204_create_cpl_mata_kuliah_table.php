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
        Schema::create('cpl_mata_kuliah', function (Blueprint $table) {
    $table->id();
    $table->foreignId('mata_kuliah_id')->constrained()->onDelete('cascade');
    $table->foreignId('cpl_id')->constrained()->onDelete('cascade');
    $table->float('persentase');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cpl_mata_kuliah');
    }
};
