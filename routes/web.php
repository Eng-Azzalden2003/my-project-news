<?php

use App\Http\Controllers\news\newsController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get ('/',function () {
//     return view('news.master');
// });
Route::prefix('news')->name('news.')->controller(newsController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/sport', 'sport')->name('sport');
    Route::get('/ technology', 'technology')->name('technology');
    Route::get('/lifeStyle', 'lifeStyle')->name('lifeStyle');
});