<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    // Kolom yang diizinkan untuk diisi data (category_id Dihapus dari sini)
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'event_date',
        'location',
        'quota',
        'status',
    ];

    // Relasi ke tabel Users: Satu Event dimiliki oleh Satu User (Penyelenggara)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi Many-to-Many ke tabel Categories
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}