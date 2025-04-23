<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();

            if ($user->email === 'guru@gmail.com') {
                return redirect('/teacher-dashboard');
            } elseif ($user->email === 'siswa@gmail.com') {
                return redirect('/homepage');
            } else {
                Auth::logout();
                return redirect('/login')->withErrors(['email' => 'Role tidak dikenal.']);
            }
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }
}
