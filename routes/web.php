<?php

use App\Http\Controllers\ProfileController;
use App\Models\Ujian;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
<<<<<<< HEAD
    return Inertia::render('index');
})->middleware(['auth', 'verified'])->name('dashboard');
=======
    $dataset = Ujian::with('mata_pelajaran')->get();
    return Inertia::render('Dashboard', [$dataset, 'set'=>['s','2']]);
}); // !todo add login middleware later
>>>>>>> e01288a3cd2b2d2e4683fb36be4bf86dc2f63fa8

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
