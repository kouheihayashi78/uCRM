<?php

use App\Http\Controllers\InertiaTestController;
use App\Http\Controllers\ProfileController;
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
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/inertia/test', [InertiaTestController::class, 'inertiaTest'])->name('inertia.test');
Route::get('/index', [InertiaTestController::class, 'index'])->name('index');
Route::get('/create', [InertiaTestController::class, 'create'])->name('create');
Route::post('/new', [InertiaTestController::class, 'new'])->name('new');
Route::get('/show/{id}', [InertiaTestController::class, 'show'])->name('show');
Route::post('/store', [InertiaTestController::class, 'store'])->name('store');

require __DIR__.'/auth.php';
