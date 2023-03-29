<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PendaftaranController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UkmController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use App\Http\Middleware\CekRole;

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

// LOGIN
Route::group(['middleware' => ['guest']], function () {
    Route::get('/', [AuthController::class, 'index'])->name('/');
    Route::post('/login', [AuthController::class, 'authenticate']);
});
Route::group(['middleware' => ['auth', 'CekRole:mahasiswa,ukm']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});

// TELUTIZEN VIEW
Route::group(['middleware' => ['auth', 'CekRole:mahasiswa']], function () {
    Route::get('/home', [ViewController::class, 'home'])->name('home');
});
// UKM VIEW
Route::group(['middleware' => ['auth', 'CekRole:ukm']], function () {
    Route::get('/home-ukm', [ViewController::class, 'home_ukm'])->name('home-ukm');
});