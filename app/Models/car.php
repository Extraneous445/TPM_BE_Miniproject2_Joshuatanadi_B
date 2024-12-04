<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    use HasFactory;
    protected $fillable = [
        'Merek_Mobil',
        'Jenis_Mobil',
        'Tahun_Terbit',
        'Harga',
        'image',
    ];
}
