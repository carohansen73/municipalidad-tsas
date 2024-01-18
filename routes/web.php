<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReclamosController;
use App\Http\Controllers\HomeController;


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

/* TADi*/
Route::get('/tadi', [App\Http\Controllers\TadiController::class, 'index'])->name('tadi');

/*HOME Y SECCIONES DE LA PAGINA QUE VE EL CIUDADANO*/
Route::controller(HomeController::class)->group(function () {
    // Route::get('/orders/{id}', 'show');
    Route::get('/', 'index');
/*SECCIONES GENERALES (que contienen otras secciones) o hacer menu desplegable*/
    Route::get('/municipio', 'showSections');
    Route::get('/atencion-al-vecino', 'showSections');
    Route::get('/ciudad-productiva', 'showSections');
    Route::get('/cultura', 'showSections');
    Route::get('/turismo', 'showSections');
    Route::get('/deportes', 'showSections');
/*SECCIONES UNITARIAS */
    Route::get('/guia-de-tramites', 'showGuiaTramites');
    Route::get('/tramite/{id}', 'showTramite');
    Route::get('/museos', 'showMuseos');
    Route::get('/delegaciones', 'showDelegaciones');
    Route::get('/seccion/{nombre}', 'showSectionPlana');

  /*SERVICIOS */
  Route::get('/servicios', 'showListServicios');


    /*NOTICIAS */
    Route::get('/portal-de-noticias', 'showNoticias');
    Route::get('/noticia/{titulo}', 'showNoticia');

});

/* Reclamos / Consultas*/
// Route::resource('/reclamos', [App\Http\Controllers\TadiController::class]);
Route::controller(ReclamosController::class)->group(function () {
    // Route::get('/orders/{id}', 'show');
    Route::get('/reclamos', 'index');
    Route::get('/nuevo-reclamo', 'create');
    Route::post('/ingresar-reclamo', 'store');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/portal', [App\Http\Controllers\HomeController::class, 'portal'])->name('portal');
