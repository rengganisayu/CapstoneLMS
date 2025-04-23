<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // --- REGISTER
    public function showRegister() {
        return view('register');
    }

    public function storeRegister(Request $request) {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'student',
        ]);

        return redirect('/login')->with('success', 'Akun berhasil dibuat!');
    }

    // --- LOGIN
    public function showLogin() {
        return view('login');
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
    
            if (Auth::user()->role == 'teacher') {
                return redirect()->route('teacher-dashboard');
            } else {
                return redirect()->route('homepage');
            }
        }
    
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }
    
    

    // --- LOGOUT
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
