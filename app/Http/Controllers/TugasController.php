<?php
namespace App\Http\Controllers;

use App\Models\Tugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TugasController extends Controller
{
    public function store(Request $request)
    {
        // Validasi form
        $request->validate([
            'tugas' => 'required|string|max:255',
        ]);

        // Menyimpan data tugas dengan user_id
        Tugas::create([
            'tugas_link' => $request->tugas,
            'user_id' => auth()->id()
        ]);

        // Redirect kembali dengan pesan sukses
        return back()->with('success', 'Tugas berhasil dikirim!');
    }
}