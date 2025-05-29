<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('cpls', function (Blueprint $table) {
    $table->id();
    $table->string('kode_cpl')->unique();   // S1, P1, KK3, KU5, dll
    $table->text('deskripsi');              // isi CPL
    $table->string('kategori');             // SIKAP, PENGETAHUAN, KK, KU
    $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cpls');
    }
};
