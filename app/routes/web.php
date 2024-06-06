<?php

use App\Http\Controllers\JenjangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\pelajaranController;

Route::get('/user/jenjang', [UserController::class, 'showJenjang'])->name('user.jenjang');

Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('admin/create-pelajaran', [AdminController::class, 'createPelajaran'])->name('admin.create_pelajaran');
Route::post('admin/store-pelajaran', [AdminController::class, 'storePelajaran'])->name('admin.store_pelajaran');
Route::get('admin/create-materi', [AdminController::class, 'createMateri'])->name('admin.create_materi');
Route::post('admin/store-materi', [AdminController::class, 'storeMateri'])->name('admin.store_materi');


Route::get('/jenjang', [JenjangController::class, 'index']);
Route::get('/jenjang/{jenjang}', [JenjangController::class,'showPelajaran'])->name('jenjang.showPelajaran');
Route::get('/pelajaran/{jenjang}', [PelajaranController::class, 'index'])->name('pelajaran.index');
Route::get('/pelajaran/gambar/{id}', [PelajaranController::class, 'show'])->name('pelajaran.show');

Route::get('/bab/{pelajaran_id}', [PelajaranController::class, 'showBab'])->name('bab');
Route::get('/materi/{id}', [PelajaranController::class, 'showMateri'])->name('materi');
Route::get('/search', [PelajaranController::class, 'search'])->name('search');

Route::get('/', function () {               
    return view('Home');
});




