<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController; // Pastikan ini sudah ada

// Ubah .php menjadi ::class
Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/project/{id}', [PortfolioController::class, 'show'])->name('project.detail');
Route::post('/contact', [PortfolioController::class, 'storeContact'])->name('contact.store');