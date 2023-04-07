<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('pesan/{id}', 'PesanController@index');

Route::get('pesan/{id}', [App\Http\Controllers\PesanController::class, 'index']);


// Route::get('pesan/{id}', 'PesanController@index')->name('pesan');

// route get admin page
Route::get('/admin',[HomeController::class, 'admin']);

Route::get('/show',[HomeController::class, 'barang']);

Route::post('/add_data',[HomeController::class,'create']);