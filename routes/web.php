<?php

use App\Http\Controllers\ArsipPage;
use App\Http\Controllers\DashboardAdmin;
use App\Http\Controllers\EventPage;
use App\Http\Controllers\GuruPage;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengumumanPage;
use App\Http\Controllers\PrestasiPage;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// view pengunjung
Route::get('/', [HomeController::class, 'index'])->name('beranda');
Route::get('/guru-dan-staf', [GuruPage::class, 'index'])->name('guru');
Route::get('/pengumuman-sekolah', [PengumumanPage::class, 'index'])->name('pengumuman');
Route::get('/event-sekolah', [EventPage::class, 'index'])->name('event');
Route::get('/arsip-sekolah', [ArsipPage::class, 'index'])->name('arsip');
Route::get('/prestasi-siswa', [PrestasiPage::class, 'index'])->name('prestasi');

// view admin
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardAdmin::class, 'index'])->name('dashboard');
});

// view profile user (default)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
