<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Auth::routes();
Route::get('/destinasi-cari',[App\Http\Controllers\PostController::class,'search'])->name('search');
Route::get('/detail/{id}',[App\Http\Controllers\PostController::class,'show'])->name('detail');
Route::get('/tentangkita',[App\Http\Controllers\TentangController::class,'index'])->name('tentangkita');
Route::get('/destinasi',[App\Http\Controllers\DestinationController::class,'index'])->name('destinasi');
Route::get('/contactus',[App\Http\Controllers\ContactController::class,'index'])->name('contactus');
