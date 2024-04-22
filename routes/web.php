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
    Route::get('/museos', 'showMuseums');
    Route::get('/delegaciones', 'showDelegaciones');
    Route::get('/seccion/{nombre}', 'showSectionPlana');

    /*SERVICIOS */
    Route::get('/servicios', 'showListServices');

    /*EDUCACION */
    Route::get('/educacion', 'showSectionEducation');
    Route::get('/educacion/{id}', 'showEducationByLevel');

     /*ORGANIGRAMA */
     Route::get('/organigrama', 'showOrganigrama');


    /*NOTICIAS */
    Route::get('/portal-de-noticias', 'showAllNews');
    Route::get('/noticia/{titulo}', 'showNews');
    Route::get('/noticias-categoria/{categoria}', 'showNoticiasPorCategoria');

    /*EVENTOS*/
    Route::get('/proximos-eventos', 'showAllEvents');

     /*TRANSPARENCIA FISCAL */
    Route::get('/transparencia-fiscal', 'showTransparenciaFiscal');
    Route::post('/transparencia-fiscal-filtro', 'showTransparenciaFiscal');
    Route::get('/boletin-oficial', 'showBoletinOficial');
    Route::get('/boletin-oficial/{tipo}', 'showBusquedaBoletinOficial');
    Route::post('/filtro-boletin-oficial/{tipo}', 'showBoletinOficialItem');
    Route::get('/avisos-oficiales', 'showAvisosOficiales');


});

/* Reclamos / Consultas*/
// Route::resource('/reclamos', [App\Http\Controllers\TadiController::class]);
Route::controller(ReclamosController::class)->group(function () {
    // Route::get('/orders/{id}', 'show');
    Route::get('/reclamos', 'index');
    Route::get('/nuevo-reclamo', 'create');
    Route::post('/ingresar-reclamo', 'store');
});

/* Noticias - API*/
Route::controller(NoticiaController::class)->group(function () {
    // Route::get('/orders/{id}', 'show');
    Route::get('/filtro-noticias/all', 'all');
    Route::get('/categoria/{id}', 'getByCategory');
    // Route::post('/ingresar-reclamo', 'store');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/cms-home', [App\Http\Controllers\CmsHomeController::class, 'index'])->name('cmsHome');
Route::get('/portal', [App\Http\Controllers\HomeController::class, 'portal'])->name('portal');









Route::resource('archivos', App\Http\Controllers\ArchivosController::class);
//rutas que requieren login
Route::group(['middleware' => 'auth'], function () {
    Route::delete('/delete-img/{id}', [App\Http\Controllers\noticiaController::class, 'destroyImg'])->name('deleteImg');;
    Route::resource('noticias', App\Http\Controllers\noticiaController::class);
    Route::resource('categorias', App\Http\Controllers\categoriaController::class);
    Route::resource('seccionInformacions', App\Http\Controllers\SeccionInformacionController::class);
    Route::get('/edit-section/{seccion}', [App\Http\Controllers\SeccionInformacionController::class, 'indexSection'])->name('seccionInformacions.indexSections');
    Route::resource('eventos', App\Http\Controllers\EventoController::class);
});



