<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\FilmController::class, 'home'])->name('home');
Route::get('/films', [App\Http\Controllers\FilmController::class, 'index'])->name('index');
Route::get('/add/film', [App\Http\Controllers\FilmController::class, 'add'])->name('add');
Route::post('/add/film',[App\Http\Controllers\FilmController::class, 'store'])->name('store');
Route::get('/edit/film/{id}',[App\Http\Controllers\FilmController::class, 'edit'])->name('edit');
Route::post('/edit/film/{id}',[App\Http\Controllers\FilmController::class, 'update'])->name('update');
Route::delete('/delete/film/{id}',[App\Http\Controllers\FilmController::class, 'destroy'])->name('destroy');