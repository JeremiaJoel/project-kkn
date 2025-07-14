<?php

use App\Models\Berita;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

Route::get('/', [LandingPageController::class, 'index'])->name('welcome');
Route::get('/katalog', [LandingPageController::class, 'katalogPage'])->name('katalog');
Route::get('/berita/detail/{id}', [LandingPageController::class, 'showDetail'])->name('berita.detail');
