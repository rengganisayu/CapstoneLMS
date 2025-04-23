<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function showProfile()
    {
        // Ambil data pengguna yang sedang login
        $user = Auth::user();
        
        // Pastikan user sudah login
        if (!$user) {
            return redirect()->route('login');
        }

        // Kirim data pengguna ke view
        return view('profile', [
            'user' => $user
        ]);
    }
}
