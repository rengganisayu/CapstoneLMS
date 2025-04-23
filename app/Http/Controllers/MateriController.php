<?php
namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Tugas;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function showTeacherCourse()
    {
        // Mengambil semua materi dari database
        $files = Materi::all();

        // Mengirimkan data ke view 'teacher-summary'
        return view('teacher-course', compact('files')); // pastikan nama view benar
    }

    public function showMateri($slug)
    {
        // Mengambil semua materi dari tabel materi
        $files = Materi::all();

        $judulMap = [
            'bab-1' => 'Bab 1 - Informatika dan Keterampilan Generik',
        ];

        if (!array_key_exists($slug, $judulMap)) {
            abort(404);
        }

        // Mengirimkan data ke view
        return view('materi.bab1', [
            'files' => $files,
            'judul' => $judulMap[$slug]
        ]);
    }

    public function store(Request $request)
    {
        // Validasi input file
        $request->validate([
            'file' => 'required|file|mimes:pdf,docx,pptx|max:2048', // batasan file
        ]);

        // Ambil file yang diupload
        $file = $request->file('file');

        // Berikan nama unik pada file
        $fileName = time() . '_' . $file->getClientOriginalName();

        // Simpan file ke folder 'materi_files' dalam folder public
        $filePath = $file->storeAs('materi_files', $fileName, 'public');

        // Simpan informasi file ke database
        Materi::create([
            'file_name' => $fileName,
            'file_path' => $filePath,
        ]);

        return back()->with('success', 'File berhasil diupload!');
    }

    public function showTeacherGrade()
    {
        // Mengambil semua materi dari database
        $materials = Materi::all();
        
        // Mengambil semua tugas yang telah dikumpulkan dengan relasi user
        $assignments = Tugas::with('user')->get();

        // Mengirimkan data ke view 'teacher-grade'
        return view('teacher-grade', [
            'materials' => $materials,
            'assignments' => $assignments
        ]);
    }
}
