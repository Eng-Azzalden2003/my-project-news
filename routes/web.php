<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\news\newsController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsSuperAdmin;
use App\Http\Middleware\IsUser;
use Illuminate\Container\Attributes\Log;
use Illuminate\Support\Facades\Route;

Route::get('', function () {
    $guard = request()->route('guard') ;
    return view('auth.login',compact('guard'));
});
// Route::get ('/index',function () {
//     return view('auth.reset-password');
// });
Route::prefix('news')->name('news.')->controller(newsController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/sport', 'sport')->name('sport');
    Route::get('/ technology', 'technology')->name('technology');
    Route::get('/lifeStyle', 'lifeStyle')->name('lifeStyle');
});
Route::prefix('super-admin')->name('super-admin.')->controller(AuthController::class)->group(function () {
    // Super Admin Login Routes
    Route::get('login', 'index')->name('login')->defaults('guard', 'super-admin');
    Route::post('login',  'login')->name('login.submit')->defaults('guard', 'super-admin');
    // Super Admin foreget-password Route
    Route::get('forget-password',  'indexForgetPassword')->name('forget-password')->defaults('guard', 'super-admin');
    Route::post('forget-password','forgetPassword' )->name('forget-password.submit')->defaults('guard', 'super-admin');
     Route::get('reset-password/{token}',  'showResetForm')
            ->name('password.reset')
            ->defaults('guard', 'super-admin');


        Route::post('reset-password', 'resetPassword')
            ->name('password.update')
            ->defaults('guard', 'super-admin');
        // محمية بـ auth>defaults('guard', 'super-admin');
    Route::get('dashboard','dashboard')->name('dashboard')->middleware(IsSuperAdmin::class)->defaults('guard', 'super-admin');
});






// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::get('login',[LoginController::class, 'index'])->name('login')->defaults('guard', 'admin');
//     Route::post('login', [LoginController::class, 'login'])->name('login.submit')->defaults('guard', 'admin');
//         // محمية بـ auth
//     Route::middleware(IsAdmin::class)->group(function () {
//         Route::get('/dashboard', function () {
//             return view('admin.dashboard');
//         })->name('dashboard');
//     });


// });




// Route::prefix('user')->name('user.')->group(function () {
//     Route::get('login',[LoginController::class, 'index'])->name('login')->defaults('guard', 'user');
//     Route::post('login', [LoginController::class, 'login'])->name('login.submit')->defaults('guard', 'user');
//         // محمية بـ auth
//     Route::middleware(IsUser::class)->group(function () {
//         Route::get('/dashboard', function () {
//             return view('user.dashboard');
//         })->name('dashboard');
//     });

// });
