<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Penting: Harus Authenticatable
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    // Beri tahu Laravel kolom apa saja yang boleh diisi
    protected $fillable = [
        'username',
        'email',
        'password',
        'role_type',
    ];

    // Sembunyikan password agar tidak bocor saat data ditarik
    protected $hidden = [
        'password',
    ];
}