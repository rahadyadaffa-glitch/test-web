<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use App\Models\User;

class AdminAuthController
{
    // Menampilkan halaman form Login khusus Admin
    public function showLogin() {
        return view('admin.login');
    }

    // Memproses data form Login Admin
    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // PENTING: Kita menggunakan Auth::guard('admin') agar Laravel mencari ke tabel admins
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            
            // Jika sukses, arahkan ke dashboard rahasia admin
            return redirect()->intended('admin/dashboard'); 
        }

        // Jika gagal, kembalikan dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau password Admin salah.',
        ])->onlyInput('email');
    }

    public function dashboard() {
        // 1. Mengambil angka statistik
        $totalApprovedEvents = Event::where('status', 'approved')->count();
        $totalPendingEvents = Event::where('status', 'pending')->count();
        $totalUsers = User::count();

        // 2. Mengambil data acara untuk list (masing-masing 3 terbaru)
        // with('user') digunakan untuk mengambil nama penyelenggara secara otomatis
        $pendingEvents = Event::with('user')->where('status', 'pending')->latest()->take(3)->get();
        $approvedEvents = Event::with('user')->where('status', 'approved')->latest()->take(3)->get();

        // 3. Mengirim semua data ke halaman dashboard
        return view('admin.dashboard', compact(
            'totalApprovedEvents', 
            'totalPendingEvents', 
            'totalUsers', 
            'pendingEvents', 
            'approvedEvents'
        ));
    }

    // Memproses Logout Admin
    public function logout(Request $request) {
        Auth::guard('admin')->logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/admin/login');
    }


}