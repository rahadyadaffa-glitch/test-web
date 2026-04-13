<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Membuat akun Admin khusus Developer
        Admin::create([
            'username' => 'Adit_SuperAdmin',
            'email' => 'admin@eventhub.com',
            'password' => Hash::make('admin12345'),
            'role_type' => 'superadmin',
        ]);

        // 2. Membuat Kategori Event
        $categories = ['Technology', 'Art & Design', 'Business', 'Education'];
        
        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
                'slug' => Str::slug($category)
            ]);
        }
    }
}