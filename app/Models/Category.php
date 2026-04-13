<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Kolom yang diizinkan untuk diisi data
    protected $fillable = [
        'name', 
        'slug'
    ];

    // Relasi Many-to-Many ke tabel Events
    public function events()
    {
        return $this->belongsToMany(Event::class);
    }
}