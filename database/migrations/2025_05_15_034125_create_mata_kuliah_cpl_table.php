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
       Schema::create('mata_kuliah_cpl', function (Blueprint $table) {
    $table->id();
    $table->foreignId('mata_kuliah_id')->constrained()->onDelete('cascade');
    $table->foreignId('cpl_id')->constrained()->onDelete('cascade');
    $table->decimal('bobot', 5, 2); // contoh: 25.00 berarti 25%
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mata_kuliah_cpl');
    }
};
