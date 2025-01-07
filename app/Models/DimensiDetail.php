<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DimensiDetail extends Model
{
    use HasFactory;

    protected $fillable = ['dimensi_id', 'judul', 'konten'];

    public function dimensi()
    {
        return $this->belongsTo(Dimensi::class);
    }
}