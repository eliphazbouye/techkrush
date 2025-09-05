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