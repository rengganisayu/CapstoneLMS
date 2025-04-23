<?php
namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index() {
        return Nilai::with(['tugas', 'siswa'])->get();
    }

    public function store(Request $request) {
        return Nilai::create($request->all());
    }

    public function show($id) {
        return Nilai::with(['tugas', 'siswa'])->findOrFail($id);
    }

    public function update(Request $request, $id) {
        $nilai = Nilai::findOrFail($id);
        $nilai->update($request->all());
        return $nilai;
    }

    public function destroy($id) {
        Nilai::destroy($id);
        return response()->json(['message' => 'Nilai deleted']);
    }

    // Custom: nilai berdasarkan siswa_id
    public function bySiswa($id) {
        return Nilai::with('tugas')->where('siswa_id', $id)->get();
    }
}
