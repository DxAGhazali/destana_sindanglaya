<?php

use App\Livewire\Pages\Anggota;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\Kegiatan;
use App\Livewire\Pages\Tetang;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/Tentang', Tetang::class);
Route::get('/Anggota', Anggota::class);
Route::get('/Kegiatan', Kegiatan::class);
