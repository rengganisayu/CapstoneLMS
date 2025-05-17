<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ChatController;
// Route untuk halaman utama setelah login (homepage untuk siswa dan teacher-dashboard untuk guru)
Route::get('/teacher-dashboard', function () {
    return view('teacher-dashboard');
});

Route::get('/teacher-course', function () {
    return view('teacher-course'); 
});

Route::get('/teacher-profile', function () {
    return view('teacher-profile'); 
});

Route::get('/teacher-summary', function () {
    return view('teacher-summary'); 
});

Route::get('/teacher-management', function () {
    return view('teacher-management'); 
});

Route::get('/teacher-grade', function () {
    return view('teacher-grade'); 
});

Route::get('/teacher-grade', function () {
    return view('teacher-grade'); 
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/draftH', function () {
    return view('draftH');
});

Route::get('/login', function () {
    return view('login');
});

// Route lainnya
Route::get('/register', function () {
    return view('register');
});

Route::get('/chatbot1', function () {
    return view('chatbot1');
});

Route::get('/course', function () {
    return view('course');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/', function () {
    return view('login');
});


Route::get('/materi/{slug}', function ($slug) {
    $judulMap = [
        'bab-1' => 'Bab 1 - Informatika dan Keterampilan Generik',
    ];

    if (!array_key_exists($slug, $judulMap)) {
        abort(404);
    }

    return view('materi.bab1', [
        'slug' => $slug,
        'judul' => $judulMap[$slug]
    ]);
});
