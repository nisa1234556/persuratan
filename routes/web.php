<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NamaTandatgnController;
use App\Http\Controllers\KepalaSuratController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\User\NamaTandatgnsController;
use App\Http\Controllers\User\KepalaSuratsController;
use App\Http\Controllers\User\SuratKeluarsController;
use App\Http\Controllers\User\SuratMasuksController;



Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::resource('nama_tandatgn', NamaTandatgnController::class)->middleware(['auth', 'admin']);
Route::resource('kepala_surat', KepalaSuratController::class)->middleware(['auth', 'admin']);
Route::resource('surat_keluar', SuratKeluarController::class)->middleware(['auth', 'admin']);
Route::resource('surat_masuk', SuratMasukController::class)->middleware(['auth', 'admin']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::get('namatandatgns', [NamaTandatgnsController::class, 'index'])->middleware(['auth', 'verified'])->name('usernamatandatangans');
Route::get('kepalasurats', [KepalaSuratsController::class, 'index'])->middleware(['auth', 'verified'])->name('userkepalasurats');
Route::get('suratkeluars', [SuratKeluarsController::class, 'index'])->middleware(['auth', 'verified'])->name('usersuratkeluars');
Route::get('suratmasuks', [SuratMasuksController::class, 'index'])->middleware(['auth', 'verified'])->name('usersuratmasuks');


Route::get('/users', [UserController::class, 'index'])->middleware(['auth'])->name('users.index');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';


route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);
