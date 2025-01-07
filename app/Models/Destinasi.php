<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Destinasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'deskripsi',
        'gambar',
        'lokasi',
        'rating',
        'harga',
        'jam_operasional'
    ];
    protected function gambar(): Attribute
    {
        return Attribute::make(
            get: fn($gambar)=> url('/storage/destinasis'. $gambar),
        );
    }
}