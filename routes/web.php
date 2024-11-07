<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', HomeController::class);

Route::controller(PostController::class)->group(function(){
    Route::get('/posts', 'index');
    Route::get('/posts/create', 'create');
    Route::get('/posts/{post}', 'show');
});