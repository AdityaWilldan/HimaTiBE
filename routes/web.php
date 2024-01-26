<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'home']);

Route::get('/kompub', function(){
    return view('user.kompub');
});
Route::get('/litbang', function(){
    return view('user.litbang');
});
Route::get('/medfo', function(){
    return view('user.medfo');
});
Route::get('/psdm', function(){
    return view('user.psdm');
});
Route::get('/sospol', function(){
    return view('user.sospol');
});
Route::get('/gallery', function(){
    return view('user.gallery');
});
Route::get('/sejarah', function(){
    return view('user.sejarah');
});

// admin
// Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/create', [AdminController::class, 'create']);
    Route::post('/store', [AdminController::class, 'store']);
    Route::get('/posting{id}/edit', [AdminController::class, 'edit']);
    Route::put('/posting{id}', [AdminController::class, 'update']);
    Route::delete('/admin/{id}', [AdminController::class, 'destroy']);
// });

// artikel
Route::get('/gallery', [ArtikelController::class, 'artikel']);
Route::get('/artikel/{id}', [ArtikelController::class, 'lengkap'])->name('user.singlepost');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/TeknoPost', [FilmController::class, 'getMovies']);
Route::get('/Quote', [FilmController::class, 'QuotePost']);