<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barangs extends Model
{
    protected $fillable = [
        'gambar',
        'judul',
        'harga',
        'genre',
        'premis',
    ];
}
