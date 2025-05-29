<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cpl extends Model
{
    use HasFactory;

    protected $fillable = ['kode_cpl', 'deskripsi'];

    public function mataKuliahs()
    {
        return $this->belongsToMany(MataKuliah::class, 'mata_kuliah_cpl')->withPivot('bobot')->withTimestamps();
    }
}
