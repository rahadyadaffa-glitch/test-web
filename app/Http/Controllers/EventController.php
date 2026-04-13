<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventController
{
    // API: Mengirimkan daftar Kategori ke Mobile
    public function getCategories()
    {
        $categories = Category::all();
        
        return response()->json([
            'success' => true,
            'message' => 'Daftar kategori berhasil diambil',
            'data' => $categories
        ], 200);
    }

    // API: Menerima data Event baru dari Mobile
    public function store(Request $request)
    {
        // 1. Validasi input dari mobile menggunakan Validator
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id', // Di API, user_id biasanya dikirim dari mobile/token
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'event_date' => 'required|date|after:today',
            'location' => 'required|string|max:255',
            'quota' => 'required|integer|min:1',
            'categories' => 'required|array|min:1',
            'categories.*' => 'exists:categories,id'
        ]);

        // Jika validasi gagal, kembalikan pesan error JSON
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak lengkap atau tidak valid',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // 2. Simpan ke database
            $event = Event::create([
                'user_id' => $request->user_id,
                'title' => $request->title,
                'description' => $request->description,
                'event_date' => $request->event_date,
                'location' => $request->location,
                'quota' => $request->quota,
                'status' => 'pending', 
            ]);

            // 3. Hubungkan relasi kategori
            $event->categories()->sync($request->categories);

            // 4. Berikan respon sukses ke aplikasi mobile
            return response()->json([
                'success' => true,
                'message' => 'Event berhasil diajukan dan sedang menunggu tinjauan Admin!',
                'data' => $event
            ], 201); // 201 adalah kode HTTP untuk "Created"

        } catch (\Exception $e) {
            // Jika terjadi kesalahan pada server
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan event: ' . $e->getMessage()
            ], 500);
        }
    }
}