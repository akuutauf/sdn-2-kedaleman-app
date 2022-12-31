<?php

use App\Http\Controllers\ArsipPage;
use App\Http\Controllers\ComponentPages;
use App\Http\Controllers\DashboardAdmin;
use App\Http\Controllers\EventPage;
use App\Http\Controllers\GuruPage;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManajemenArsip;
use App\Http\Controllers\ManajemenBanner;
use App\Http\Controllers\ManajemenEvent;
use App\Http\Controllers\ManajemenGuru;
use App\Http\Controllers\ManajemenMotivasi;
use App\Http\Controllers\ManajemenPengumuman;
use App\Http\Controllers\ManajemenPrestasi;
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

// route mengambil data berdasarkan id
Route::get('/pengumuman-sekolah/{id}/show', [PengumumanPage::class, 'show'])->name('pengumuman.show');
Route::get('/event-sekolah/{id}/show', [EventPage::class, 'show'])->name('event.show');
Route::get('/prestasi-siswa/{id}/show', [PrestasiPage::class, 'show'])->name('prestasi.show');

// view admin
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardAdmin::class, 'index'])->name('dashboard');

    // manajemen guru
    Route::get('/index/guru', [ManajemenGuru::class, 'index'])->name('admin.guru');
    Route::get('/create/guru', [ManajemenGuru::class, 'create'])->name('admin.create.guru');
    Route::post('/store/guru', [ManajemenGuru::class, 'store'])->name('admin.store.guru');
    Route::get('/edit/{id}/guru', [ManajemenGuru::class, 'edit'])->name('admin.edit.guru');
    Route::post('/update/{id}/guru', [ManajemenGuru::class, 'update'])->name('admin.update.guru');
    Route::get('/destroy/{id}/guru', [ManajemenGuru::class, 'destroy'])->name('admin.delete.guru');

    // manajemen motivasi
    Route::get('/index/motivasi', [ManajemenMotivasi::class, 'index'])->name('admin.motivasi');
    Route::get('/create/motivasi', [ManajemenMotivasi::class, 'create'])->name('admin.create.motivasi');
    Route::post('/store/motivasi', [ManajemenMotivasi::class, 'store'])->name('admin.store.motivasi');
    Route::get('/edit/{id}/motivasi', [ManajemenMotivasi::class, 'edit'])->name('admin.edit.motivasi');
    Route::post('/update/{id}/motivasi', [ManajemenMotivasi::class, 'update'])->name('admin.update.motivasi');
    Route::get('/destroy/{id}/motivasi', [ManajemenMotivasi::class, 'destroy'])->name('admin.delete.motivasi');

    // manajemen pengumuman
    Route::get('/index/pengumuman', [ManajemenPengumuman::class, 'index'])->name('admin.pengumuman');
    Route::get('/create/pengumuman', [ManajemenPengumuman::class, 'create'])->name('admin.create.pengumuman');
    Route::post('/store/pengumuman', [ManajemenPengumuman::class, 'store'])->name('admin.store.pengumuman');
    Route::get('/edit/{id}/pengumuman', [ManajemenPengumuman::class, 'edit'])->name('admin.edit.pengumuman');
    Route::post('/update/{id}/pengumuman', [ManajemenPengumuman::class, 'update'])->name('admin.update.pengumuman');
    Route::get('/destroy/{id}/pengumuman', [ManajemenPengumuman::class, 'destroy'])->name('admin.delete.pengumuman');

    // manajemen arsip
    Route::get('/index/arsip', [ManajemenArsip::class, 'index'])->name('admin.arsip');
    Route::get('/create/arsip', [ManajemenArsip::class, 'create'])->name('admin.create.arsip');
    Route::post('/store/arsip', [ManajemenArsip::class, 'store'])->name('admin.store.arsip');
    Route::get('/edit/{id}/arsip', [ManajemenArsip::class, 'edit'])->name('admin.edit.arsip');
    Route::post('/update/{id}/arsip', [ManajemenArsip::class, 'update'])->name('admin.update.arsip');
    Route::get('/destroy/{id}/arsip', [ManajemenArsip::class, 'destroy'])->name('admin.delete.arsip');

    // manajemen event
    Route::get('/index/event', [ManajemenEvent::class, 'index'])->name('admin.event');
    Route::get('/create/event', [ManajemenEvent::class, 'create'])->name('admin.create.event');
    Route::post('/store/event', [ManajemenEvent::class, 'store'])->name('admin.store.event');
    Route::get('/edit/{id}/event', [ManajemenEvent::class, 'edit'])->name('admin.edit.event');
    Route::post('/update/{id}/event', [ManajemenEvent::class, 'update'])->name('admin.update.event');
    Route::get('/destroy/{id}/event', [ManajemenEvent::class, 'destroy'])->name('admin.delete.event');

    // manajemen prestasi
    Route::get('/index/prestasi', [ManajemenPrestasi::class, 'index'])->name('admin.prestasi');
    Route::get('/create/prestasi', [ManajemenPrestasi::class, 'create'])->name('admin.create.prestasi');
    Route::post('/store/prestasi', [ManajemenPrestasi::class, 'store'])->name('admin.store.prestasi');
    Route::get('/edit/{id}/prestasi', [ManajemenPrestasi::class, 'edit'])->name('admin.edit.prestasi');
    Route::post('/update/{id}/prestasi', [ManajemenPrestasi::class, 'update'])->name('admin.update.prestasi');
    Route::get('/destroy/{id}/prestasi', [ManajemenPrestasi::class, 'destroy'])->name('admin.delete.prestasi');

    // manajemen banner
    Route::get('/index/banner', [ManajemenBanner::class, 'index'])->name('admin.banner');
    Route::get('/create/banner', [ManajemenBanner::class, 'create'])->name('admin.create.banner');
    Route::post('/store/banner', [ManajemenBanner::class, 'store'])->name('admin.store.banner');
    Route::get('/edit/{id}/banner', [ManajemenBanner::class, 'edit'])->name('admin.edit.banner');
    Route::post('/update/{id}/banner', [ManajemenBanner::class, 'update'])->name('admin.update.banner');
    Route::get('/destroy/{id}/banner', [ManajemenBanner::class, 'destroy'])->name('admin.delete.banner');
});

// view profile user (default)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
