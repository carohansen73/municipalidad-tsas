<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReclamosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticiaController;

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

    /*EDUCACION */
    Route::get('/educacion', 'showSeccionEducation');
    Route::get('/educacion/{id}', 'showEducationByLevel');


    /*NOTICIAS */
    Route::get('/portal-de-noticias', 'showAllNews');
    Route::get('/noticia/{titulo}', 'showNews');
    Route::get('/noticias-categoria/{categoria}', 'showNoticiasPorCategoria');

});

/* Reclamos / Consultas*/
// Route::resource('/reclamos', [App\Http\Controllers\TadiController::class]);
Route::controller(ReclamosController::class)->group(function () {
    // Route::get('/orders/{id}', 'show');
    Route::get('/reclamos', 'index');
    Route::get('/nuevo-reclamo', 'create');
    Route::post('/ingresar-reclamo', 'store');
});

/* Noticias*/
Route::controller(NoticiaController::class)->group(function () {
    // Route::get('/orders/{id}', 'show');
    Route::get('/filtro-noticias/all', 'all');
    Route::get('/categoria/{id}', 'getByCategory');
    // Route::post('/ingresar-reclamo', 'store');
});

Route::delete('/delete-img/{id}', [App\Http\Controllers\noticiaController::class, 'destroyImg'])->name('deleteImg');;
Route::resource('noticias', App\Http\Controllers\noticiaController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/cms-home', [App\Http\Controllers\CmsHomeController::class, 'index'])->name('cmsHome');

Route::get('/portal', [App\Http\Controllers\HomeController::class, 'portal'])->name('portal');




Route::resource('categorias', App\Http\Controllers\categoriaController::class);
