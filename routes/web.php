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

Route::group(['middleware' => ['auth', 'CekRole:mahasiswa, ukm']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});

// TELUTIZEN VIEW
Route::group(['middleware' => ['auth', 'CekRole:mahasiswa']], function () {
    Route::get('/home', [ViewController::class, 'home'])->name('home');
    Route::get('/ukm', [ViewController::class, 'ukm']);
    Route::get('/about', [ViewController::class, 'about']);
    Route::get('detail-ukm/{id_ukm}', [ContentController::class, 'detail_ukm']); 
});

// UKM VIEW
Route::group(['middleware' => ['auth', 'CekRole:ukm']], function () {
    Route::get('/home-ukm', [ViewController::class, 'home_ukm'])->name('home-ukm');
    Route::get('/edit', [ViewController::class, 'edit_ukm']);
    Route::get('/index_ukm', [ContentController::class, 'index_ukm'])->name('index_ukm');
<<<<<<< HEAD
});

// GENERAL ADMIN VIEW
Route::group(['middleware' => ['auth', 'CekRole:general admin']], function () {
    
    // users
    Route::get('users',[UserController::class,'index'])->name('users.index');
    Route::get('users/download-sampel-import',[UserController::class,'downloadSampelImport'])->name('users.download-sampel-import');
    Route::post('users',[UserController::class,'import'])->name('users.import');
=======
    Route::get('daftar-event', [EventController::class, 'index'])->name('daftar-event');
>>>>>>> b83182cbde28646634de7a61eafceac6ce55f2fe
});