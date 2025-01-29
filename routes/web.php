<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReclamosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\BoletinOficialController;

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
Auth::routes(['register' => false, 'reset'=> false]);


// Route::resource('tadi', 'TadiController');
// Route::get('/tadi', 'TadiController@index')->name('tadi');

/* TADi*/
Route::get('/tadi', [App\Http\Controllers\TadiController::class, 'index'])->name('tadi');

/*HOME Y SECCIONES DE LA PAGINA QUE VE EL CIUDADANO*/
Route::controller(HomeController::class)->group(function () {
    // Route::get('/orders/{id}', 'show');
    Route::get('/', 'index');
/*SECCIONES GENERALES (que contienen otras secciones) o hacer menu desplegable*/
    Route::get('/municipio', 'showMenuSection');
    Route::get('/atencion-al-vecino', 'showMenuSection');
    Route::get('/ciudad-productiva', 'showMenuSection');
    Route::get('/cultura', 'showMenuSection');
    Route::get('/turismo', 'showMenuSection');
    Route::get('/deportes', 'showMenuSection');
    /*SECCIONES UNITARIAS */
    Route::get('/info-boleta', 'showInfoBoletaDigital');

    Route::get('/seccion/{nombre}', 'showSectionPlana');

    Route::get('/guia-de-tramites', 'showGuiaTramites');
    Route::get('/tramite/{id}', 'showTramite');

    // Route::get('/area/{nombre}', 'showSectionPlana');
    // /*SERVICIOS */
    // Route::get('/servicios/{tipo}', 'showListServices');

    /*MUNICIPIO-TSAS */
    Route::get('/la-ciudad', 'showLaCiudad');
    Route::get('/educacion', 'showSectionEducation');
    Route::get('/educacion/{id}', 'showEducationByLevel');
    Route::get('/salud', 'showSalud');
    Route::get('/organigrama', 'showOrganigrama');
    Route::get('/organigrama/{id}', 'getOrganigramaByArea');
    Route::get('/delegaciones', 'showDelegaciones');
    Route::get('/ente-vial', 'showEnteVial');
    Route::get('/direccion-de-juventud', 'showJuventud');
    Route::get('/tresa-estudia', 'showCiudadesUniversitarias');


    /* ATENCION AL VECINO */
    Route::get('/serv/{tipo}', 'showEncuestas');

    /*CULTURA */
    Route::get('/cce', 'showCCE');
    Route::get('/museos', 'showMuseums');
    Route::get('/fiesta-del-trigo', 'showFiestaDelTrigo');
    Route::get('/colectividades', 'showColectividades');
    Route::get('/bibliotecas', 'showBibliotecas');


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
    Route::get('/filtro-boletin-oficial/{tipo?}', 'showBoletinOficial');
    Route::post('/filtro-boletin-oficial/{tipo}', 'showBoletinOficialItem');

    Route::get('/avisos-oficiales', 'showAvisosOficiales');

    Route::get('/adultos-mayores', 'showAdultosMayores');

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





// Route::controller(BoletinOficialController::class)->group(function () {

//     Route::post('admin-filtro-boletinOficial/', 'indexFiltered');

// });





Route::resource('archivos', App\Http\Controllers\ArchivosController::class);
//rutas que requieren login
Route::group(['middleware' => 'auth'], function () {
    Route::delete('/delete-img/{id}', [App\Http\Controllers\NoticiaController::class, 'destroyImg'])->name('deleteImg');;
    Route::resource('noticias', App\Http\Controllers\NoticiaController::class);
    Route::resource('reporteEconomico', App\Http\Controllers\ReporteEconomicoController::class);
    Route::resource('situacionFinanciera', App\Http\Controllers\SituacionFinancieraController::class);

    Route::resource('boletinOficial', App\Http\Controllers\BoletinOficialController::class);
    Route::post('admin-filtro-boletinOficial/', [App\Http\Controllers\BoletinOficialController::class, 'indexFiltered'])->name('filtro');
    Route::resource('avisoOficial', App\Http\Controllers\AvisoOficialController::class);



    Route::resource('categorias', App\Http\Controllers\CategoriaController::class);
    Route::resource('seccionInformacion', App\Http\Controllers\SeccionInformacionController::class);
    Route::get('/edit-section/{seccion}', [App\Http\Controllers\SeccionInformacionController::class, 'indexSection'])->name('seccionInformacion.indexSections');
    Route::resource('eventos', App\Http\Controllers\EventoController::class);
    Route::resource('user', App\Http\Controllers\UserController::class);

});





Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});
//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});




Route::resource('rols', App\Http\Controllers\RolController::class);
