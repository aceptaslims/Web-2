<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', [ProfileController::class, 'home'])->name('home');
Route::get('/about', [ProfileController::class, 'about'])->name('about');
Route::get('/skills', [ProfileController::class, 'skills'])->name('skills');
Route::get('/portfolio', [ProfileController::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [ProfileController::class, 'contact'])->name('contact');