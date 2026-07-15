<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Menampilkan halaman Login
     */
    public function loginView()
    {
        return view('login');
    }

    /**
     * Menampilkan halaman Register
     */
    public function registerView()
    {
        return view('register');
    }

    /**
     * Proses Register
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'role' => 'required|in:admin,mahasiswa,dosen',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('login')->with('success', 'Register berhasil, silakan login.');
    }

    /**
     * Proses Login
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            $user = Auth::user();

            if ($user->role == 'admin') {
                return redirect()->route('dashboard');
            }

            // PERUBAHAN DI SINI: Dialihkan ke route dashboard
            if ($user->role == 'mahasiswa') {
                return redirect()->route('dashboard');
            }

            if ($user->role == 'dosen') {
                return redirect()->route('approval.index');
            }

            Auth::logout();

            return redirect()->route('login')->withErrors([
                'email' => 'Role pengguna tidak valid.',
            ]);
        }

        return back()->withErrors([
            'email' => 'Email atau Password salah.',
        ])->onlyInput('email');
    }

    /**
     * Logout
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}