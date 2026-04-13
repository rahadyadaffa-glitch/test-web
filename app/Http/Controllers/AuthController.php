<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth; // Perbaikan: 'Support' harus diawali huruf S kapital
use Illuminate\Support\Facades\Hash; // Perbaikan: 'Support' harus diawali huruf S kapital

class AuthController 
{
    // 1. Menampilkan halaman form Login
    public function showLogin() {
        return view('login');
    }

    // 2. Memproses data dari form Login
    public function login(Request $request) {
        // Perbaikan: Menghilangkan kurung siku [] yang memicu Fatal Error
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard'); // Arahkan ke dashboard jika sukses
        }

        // Jika gagal, kembalikan ke form dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau password yang Anda masukkan salah.',
        ])->onlyInput('email');
    }

    // 3. Menampilkan halaman form Register
    public function showRegister() {
        return view('register');
    }

    // 4. Memproses data dari form Register
    public function register(Request $request) {
        // Validasi inputan form
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:8', 'confirmed'], // 'confirmed' berarti harus ada input 'password_confirmation' di form nanti
        ]);

        // Simpan data ke tabel users
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Enkripsi password agar aman
        ]);

        // Otomatiskan proses login setelah berhasil daftar
        Auth::login($user);

        return redirect('dashboard');
    }

    // 5. Memproses Logout
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}