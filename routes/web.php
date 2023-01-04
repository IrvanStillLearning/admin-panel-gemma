<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Banner;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('login')->group(function(){
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/', [LoginController::class, 'authenticate']);
});

Route::group(['middleware' => 'auth'], function(){    
    Route::get('/', function(){
        return redirect('dashboard');
    });
    
    Route::get('dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');
    
    Route::prefix('register')->group(function () {
        Route::get('/', [RegisterController::class, 'index']);
        Route::post('store', [RegisterController::class, 'store']);
    });
    
    Route::get('kas', function () {
        return view('kas');
    });
    
    Route::get('produk', function () {
        return view('produk');
    });
    
    
    Route::prefix('banner')->group(function () {
        Route::get('/', [BannerController::class, 'index']);
    
        Route::post('upload', [BannerController::class, 'store']);
        Route::get('edit/{id}', [BannerController::class, 'edit']);
        Route::delete('delete/{id}', [BannerController::class, 'destroy']);
    });

    Route::get('logout', [LoginController::class, 'logout']);
    
});


