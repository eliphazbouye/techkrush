<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/news', [PostController::class, 'index'])->name('post.index');

Route::get('/podcasts', function () {
    return 'Podcasts';
})->name('podcasts');

Route::get('/Resource', function () {
    return 'Resource';
})->name('resource');

Route::get('/admin/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/admin/dashboard/category', [\App\Http\Controllers\CategoryController::class, 'index'])->name('dashboard.category');
