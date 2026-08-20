<?php

namespace App\Providers;

use App\Models\Archivos;
use App\Models\AvisoOficial;
use App\Models\BoletinOficial;
use App\Models\Categoria;
use App\Models\Evento;
use App\Models\InscripcionSorteo;
use App\Models\Institucion;
use App\Models\Noticia;
use App\Models\Permission;
use App\Models\ReporteEconomico;
use App\Models\SeccionInformacion;
use App\Models\SituacionFinanciera;
use App\Models\Taller;
use App\Models\User;
use App\Policies\ArchivosPolicy;
use App\Policies\AvisoOficialPolicy;
use App\Policies\BoletinOficialPolicy;
use App\Policies\CategoriaPolicy;
use App\Policies\EventoPolicy;
use App\Policies\InscripcionSorteoPolicy;
use App\Policies\InstitucionPolicy;
use App\Policies\NoticiaPolicy;
use App\Policies\PermissionPolicy;
use App\Policies\ReporteEconomicoPolicy;
use App\Policies\RolPolicy;
use App\Policies\SeccionInformacionPolicy;
use App\Policies\SituacionFinancieraPolicy;
use App\Policies\TallerPolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Role;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Taller::class => TallerPolicy::class,
        Institucion::class => InstitucionPolicy::class,
        Noticia::class => NoticiaPolicy::class,
        Evento::class => EventoPolicy::class,
        BoletinOficial::class => BoletinOficialPolicy::class,
        AvisoOficial::class => AvisoOficialPolicy::class,
        Archivos::class => ArchivosPolicy::class,
        Categoria::class => CategoriaPolicy::class,
        ReporteEconomico::class => ReporteEconomicoPolicy::class,
        SeccionInformacion::class => SeccionInformacionPolicy::class,
        SituacionFinanciera::class => SituacionFinancieraPolicy::class,
        InscripcionSorteo::class => InscripcionSorteoPolicy::class,
        Role::class => RolPolicy::class,
        User::class => UserPolicy::class,
        Permission::class => PermissionPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
