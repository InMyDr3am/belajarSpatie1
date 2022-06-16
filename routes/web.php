<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts',[App\Http\Controllers\PostController::class,'index'])->name('post');
Route::get('posts/create',[App\Http\Controllers\PostController::class,'create'])->name('post.create');
Route::post('posts/store',[App\Http\Controllers\PostController::class,'store'])->name('post.store');
