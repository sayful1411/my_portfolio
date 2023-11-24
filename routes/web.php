<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// pages
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'aboutMe'])->name('about');
Route::get('/projects', [HomeController::class, 'projects'])->name('projects');
Route::get('/projects/{id}', [HomeController::class, 'showProject'])->name('project.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
