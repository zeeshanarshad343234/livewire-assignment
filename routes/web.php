<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('auth.login');
})->middleware('auth.redirect');

Auth::routes();

    Route::group(['middleware' => 'auth'],function () {
        Route::get('/posts', [PostController::class,'index'])->name('posts.index');
        Route::get('/create',[PostController::class,'create'])->name('posts.create');
        Route::get('/show/{post_id}',[PostController::class,'show'])->name('posts.show');
    });


