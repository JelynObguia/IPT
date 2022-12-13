<?php

use App\Http\Controllers\SeafoodController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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
Route::get('/', [AuthController::class, 'loginForm'])->name('login');
Route::post('/', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/register', [AuthController::class, 'registerForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/verification/{user}/{token}', [AuthController::class, 'verification']);

Route::group(['middleware' => ['auth', 'verified']], function(){
    Route::get('/dashboard', [SeafoodController::class, 'index']);
    Route::get('/edit/{seafood}', [SeafoodController::class, 'edit']);
    Route::get('/delete/{seafood}', [SeafoodController::class, 'destroy']);
    Route::get('/logs', [SiteController::class, 'logs']);
});


