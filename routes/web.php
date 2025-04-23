<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\ProfileController;

// --- ROUTE REGISTER ---
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'storeRegister']);

// --- ROUTE LOGIN ---
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// --- ROUTE LOGOUT ---
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// --- ROUTE HOMEPAGE ---
// Rute untuk homepage siswa
Route::get('/homepage', function () {
    return view('homepage');
})->middleware('auth');

// --- ROUTE ADMIN ---
Route::middleware(['auth'])->group(function () {
    Route::get('/teacher-dashboard', function () {
        return view('teacher-dashboard'); // Sesuaikan dengan view yang kamu punya
    })->name('teacher-dashboard');

    Route::get('/homepage', function () {
        return view('homepage'); // Sesuaikan juga
    })->name('homepage');
});

// --- ROUTE STUDENT ---
// Rute untuk homepage siswa
Route::get('/student/homepage', [AuthController::class, 'homepage'])->middleware('role:student')->name('student.homepage');

Route::get('/profile', [ProfileController::class, 'showProfile'])->middleware('auth')->name('profile');

// --- ROUTE TEACHER ---
// Teacher Routes
Route::get('/teacher-course', function () {
    return view('teacher-course'); 
});

Route::resource('tugas', TugasController::class);

// Route untuk menampilkan materi bagi teacher
Route::get('/teacher-course', [MateriController::class, 'showTeacherCourse'])->name('teacher.course');

Route::get('/materi/{slug}', [MateriController::class, 'showMateri'])->name('materi.show');

// Route untuk menampilkan materi di halaman student
Route::get('/course', [MateriController::class, 'showMateriForStudent'])->name('course');

Route::post('/upload-file', [MateriController::class, 'store'])->name('upload.file');

// Route untuk menyimpan tugas
Route::post('/submit-tugas', [TugasController::class, 'store'])->name('submit.tugas');

Route::get('/teacher-summary', function () {
    return view('teacher-summary'); 
});

Route::get('/teacher-management', function () {
    return view('teacher-management'); 
});

Route::get('/teacher-grade', [MateriController::class, 'showTeacherGrade']);

// --- OTHER ROUTES ---
Route::get('/chatbot', function () {
    return view('chatbot');
});

Route::get('/course', function () {
    return view('course');
});
