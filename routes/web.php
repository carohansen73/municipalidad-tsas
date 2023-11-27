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
    return view('home.home');
});
Auth::routes();

// Route::resource('tadi', 'TadiController');
// Route::get('/tadi', 'TadiController@index')->name('tadi');
Route::get('/tadi', [App\Http\Controllers\TadiController::class, 'index'])->name('tadi');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
