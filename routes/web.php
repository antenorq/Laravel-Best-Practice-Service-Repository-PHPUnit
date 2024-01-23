<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::get('/blog/{postId}', [BlogController::class, 'show'])->name('blog.show');
Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');
