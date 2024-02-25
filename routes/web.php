<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\AktivitasController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\KeterampilanController;
use App\Http\Controllers\BerandaprofileController;
use App\Http\Controllers\JenispengalamanController;
use App\Http\Controllers\JenisketerampilanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/settings', [SettingsController::class, 'edit'])->name('settings.edit');

    Route::resource('posts',PostController::class);
    Route::resource('pengalaman',PengalamanController::class);
    Route::resource('aktivitas',AktivitasController::class);
    Route::resource('keterampilan',KeterampilanController::class);
    Route::resource('jenis-pengalaman',JenispengalamanController::class);
    Route::resource('jenis-keterampilan',JenisketerampilanController::class);
});

require __DIR__.'/auth.php';
