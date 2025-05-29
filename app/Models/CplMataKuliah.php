<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CplMataKuliah extends Model
{
    use HasFactory;

    protected $table = 'cpl_mata_kuliah';

    protected $fillable = ['mata_kuliah_id', 'cpl_id', 'persentase'];
}
