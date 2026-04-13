<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class AdminEventController 
{
    public function index()
    {
        // 1. Mengambil data untuk Statistik Atas
        $activeEventsCount = Event::where('status', 'approved')->count();
        // Menggabungkan total kuota dari event yang sudah disetujui sebagai simulasi "Total Participants"
        $totalParticipants = Event::where('status', 'approved')->sum('quota'); 
        $pendingCount = Event::where('status', 'pending')->count();

        // 2. Mengambil semua event, diurutkan dari yang terbaru, dan dibatasi 10 per halaman (Paginasi)
        $events = Event::with(['user', 'categories'])->latest()->paginate(10);

        return view('admin.events.index', compact(
            'activeEventsCount', 
            'totalParticipants', 
            'pendingCount', 
            'events'
        ));
    }
}