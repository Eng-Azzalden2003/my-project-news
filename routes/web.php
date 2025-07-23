<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\news\newsController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsSuperAdmin;
use App\Http\Middleware\IsUser;
use Illuminate\Container\Attributes\Log;
use Illuminate\Support\Facades\Route;

Route::get('', function () {
    return view('auth.login');
});
// Route::get ('/',function () {
//     return view('news.master');
// });
Route::prefix('news')->name('news.')->controller(newsController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/sport', 'sport')->name('sport');
    Route::get('/ technology', 'technology')->name('technology');
    Route::get('/lifeStyle', 'lifeStyle')->name('lifeStyle');
});
Route::prefix('superadmin')->name('superadmin.')->group(function () {
    Route::get('login',[LoginController::class, 'index'])->name('login')->defaults('guard', 'superadmin');
    Route::post('login', [LoginController::class, 'login'])->name('login.submit')->defaults('guard', 'superadmin');
        // محمية بـ auth
    Route::middleware(IsSuperAdmin::class)->group(function () {
        Route::get('/dashboard', function () {
            return view('super-admin.dashboard');
        })->name('dashboard');
    });

});




Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login',[LoginController::class, 'index'])->name('login')->defaults('guard', 'admin');
    Route::post('login', [LoginController::class, 'login'])->name('login.submit')->defaults('guard', 'admin');
        // محمية بـ auth
    Route::middleware(IsAdmin::class)->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');
    });


});




Route::prefix('user')->name('user.')->group(function () {
    Route::get('login',[LoginController::class, 'index'])->name('login')->defaults('guard', 'user');
    Route::post('login', [LoginController::class, 'login'])->name('login.submit')->defaults('guard', 'user');
        // محمية بـ auth
    Route::middleware(IsUser::class)->group(function () {
        Route::get('/dashboard', function () {
            return view('user.dashboard');
        })->name('dashboard');
    });

});
