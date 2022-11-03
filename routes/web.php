<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
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

Route::get('/', function(){
    return redirect('dashboard');
});

Route::get('dashboard', function () {
    return view('dashboard.index');
});

Route::get('login', function() {
    return view('login.login');
});

Route::get('register', function() {
    return view('login.register');
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
    Route::delete('/delete/{id}', [BannerController::class, 'destroy']);
});


