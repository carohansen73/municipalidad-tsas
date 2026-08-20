<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReclamosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\BoletinOficialController;
use App\Http\Controllers\FdtLicitacionArchivoController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\InstitucionController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\TallerController;

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
Route::get('/sitemap.xml', [SitemapController::class, 'index']);

Route::get('/', function () {
    return view('home.home');
});
Auth::routes(['register' => false, 'reset'=> false]);


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
    Route::get('/fiesta-del-trigo', 'show56FiestaDelTrigo');
    Route::get('/colectividades', 'showColectividades');
    Route::get('/bibliotecas', 'showBibliotecas');


    /*NOTICIAS */
    Route::get('/portal-de-noticias', 'showAllNews');
    Route::get('/noticia/{titulo}', 'showNews');
    Route::get('/noticias-categoria/{categoria}', 'showNoticiasPorCategoria');

    /*EVENTOS*/
    Route::get('/proximos-eventos', 'showAllEvents');
    Route::get('/eventos-chat_bot', 'showAllEventsForChatBot');

    /*TRANSPARENCIA FISCAL */
    Route::get('/transparencia-fiscal', 'showTransparenciaFiscal');
    Route::post('/transparencia-fiscal-filtro', 'showTransparenciaFiscal');
    Route::get('/boletin-oficial', 'showBoletinOficial');
    Route::get('/boletin-oficial/{tipo}', 'showBusquedaBoletinOficial');
    Route::get('/filtro-boletin-oficial/{tipo?}', 'showBoletinOficial');
    Route::post('/filtro-boletin-oficial/{tipo}', 'showBoletinOficialItem');
    Route::get('/avisos-oficiales', 'showAvisosOficiales');

    Route::get('/adultos-mayores', 'showAdultosMayores');

    Route::get('/actividades-y-talleres', 'showTalleres');

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

Route::get('/portal', [App\Http\Controllers\HomeController::class, 'portal'])->name('portal');
/*Sorteo de inscripciones para la Corvina Negra*/
Route::get('/sorteos-empleados', [App\Http\Controllers\EspecialesController::class, 'showInscription'])->name('sorteo.empleados');
Route::post('/sorteo/inscribirse', [App\Http\Controllers\EspecialesController::class, 'register'])->name('sorteo.register');


// Route::controller(BoletinOficialController::class)->group(function () {

//     Route::post('admin-filtro-boletinOficial/', 'indexFiltered');

// });


//rutas que requieren login
Route::group(['middleware' => 'auth'], function () {
    Route::get('/cms-home', [App\Http\Controllers\CmsHomeController::class, 'index'])->name('cmsHome');
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
    Route::resource('archivos', App\Http\Controllers\ArchivosController::class);

    /* Fiesta del Trigo */
    Route::resource('lineUps', App\Http\Controllers\LineUpController::class);
     Route::patch(
            'lineUps/{lineup}/activar',
            [App\Http\Controllers\LineUpController::class, 'activar']
        )->name('lineup.activar');

    Route::resource('grillas', App\Http\Controllers\GrillaController::class);
    Route::resource('convocatorias', App\Http\Controllers\ConvocatoriasController::class);

    Route::resource('tickets', App\Http\Controllers\FdtTicketsController::class)
            ->except('destroy');

    Route::patch(
            'tickets/{ticket}/activar',
            [App\Http\Controllers\FdtTicketsController::class, 'activar']
        )->name('tickets.activar');

    Route::resource('licitaciones', App\Http\Controllers\FdtLicitacionController::class)
        ->parameters([
            'licitaciones' => 'licitacion'
        ]);
    Route::patch(
            'licitaciones/{licitacion}/activar',
            [App\Http\Controllers\FdtLicitacionController::class, 'activar']
        )->name('licitaciones.activar');
    Route::post(
            '/licitaciones/{licitacion}/archivos',
            [FdtLicitacionArchivoController::class, 'store']
        )->name('licitaciones.archivos.store');

    /* Actividades y Talleres */
    Route::resource('talleres', TallerController::class)
        ->parameters([
            'talleres' => 'taller'
        ])
        ->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);

    Route::delete(
            'talleres/{taller}/actividades/{actividad}',
            [TallerController::class, 'destroyActividad']
        )->name('talleres.actividades.destroy');

    Route::resource('instituciones', InstitucionController::class)
        ->parameters([
            'instituciones' => 'institucion'
        ])
        ->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);

          /* Sorteo Corvina Negra */
    Route::get('/sorteo', [App\Http\Controllers\SorteoController::class, 'index'])->name('sorteo.index');

// Route::delete(
//     '/licitaciones/archivos/{archivo}',
//     [LicitacionArchivoController::class, 'destroy']
// )->name('licitaciones.archivos.destroy');


    /* Roles y Permisos - Spatie - Exclusivo Admins */
    Route::resource('rols', App\Http\Controllers\RolController::class);

    Route::get('/permisos/create', [PermissionController::class, 'create'])
        ->name('permisos.create');

    Route::post('/permisos', [PermissionController::class, 'store'])
        ->name('permisos.store');

});


// Instructivo ojos en alerta
Route::get('/instructivo', function () {
    return view('seguridad/instructivo');
})->name('instructivo');



/* Roles y Permisos - Spatie - Exclusivo Admins */
// Route::middleware(['auth', 'role:Admin'])->group(function () {

// });






//Clear Route cache:
// Route::get('/route-clear', function() {
//     $exitCode = Artisan::call('route:clear');
//     return '<h1>Route cache cleared</h1>';
// });

// Route::get('/clear-cache', function () {

//     Artisan::call('cache:clear');
//     Artisan::call('config:clear');
//     Artisan::call('view:clear');
//     Artisan::call('route:clear');

//     return 'CACHE LIMPIADA ✔';
// });







