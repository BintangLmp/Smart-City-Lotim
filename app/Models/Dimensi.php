<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\DimensiDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dimensi extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'deskripsi', 'slug'];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($dimensi) {
            if (empty($dimensi->slug)) {
                $dimensi->slug = Str::slug($dimensi->nama);
            }
        });

        static::updating(function ($dimensi) {
            if (empty($dimensi->slug)) {
                $dimensi->slug = Str::slug($dimensi->nama);
            }
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function details()
    {
        return $this->hasMany(DimensiDetail::class);
    }
}
