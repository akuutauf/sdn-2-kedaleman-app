<?php

use App\Http\Controllers\ArsipPage;
use App\Http\Controllers\ComponentPages;
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

// view component pages (admin)
Route::get('/buttons', [ComponentPages::class, 'buttons'])->name('buttons');
Route::get('/dropdowns', [ComponentPages::class, 'dropdowns'])->name('dropdowns');
Route::get('/typography', [ComponentPages::class, 'typography'])->name('typography');
Route::get('/basic_elements', [ComponentPages::class, 'basic_elements'])->name('basic_elements');
Route::get('/chart_js', [ComponentPages::class, 'chart_js'])->name('chart_js');
Route::get('/basic_table', [ComponentPages::class, 'basic_table'])->name('basic_table');
Route::get('/mdi_icons', [ComponentPages::class, 'mdi_icons'])->name('mdi_icons');
Route::get('/sample_login', [ComponentPages::class, 'sample_login'])->name('sample_login');
Route::get('/sample_register', [ComponentPages::class, 'sample_register'])->name('sample_register');
Route::get('/error_404', [ComponentPages::class, 'error_404'])->name('error_404');
Route::get('/error_500', [ComponentPages::class, 'error_500'])->name('error_500');
Route::get('/documentation', [ComponentPages::class, 'documentation'])->name('documentation');

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
