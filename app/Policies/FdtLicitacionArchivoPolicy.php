<?php

namespace App\Policies;

use App\Models\FdtLicitacionArchivo;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class FdtLicitacionArchivoPolicy
{
    use HandlesAuthorization;

    /**
     * Gestionar archivos de una licitación es parte de editarla, así que se
     * usa el mismo permiso que 'licitaciones.edit' en vez de uno nuevo.
     */
    public function create(User $user)
    {
        return $user->can('licitaciones.edit');
    }

    public function update(User $user, FdtLicitacionArchivo $fdtLicitacionArchivo)
    {
        return $user->can('licitaciones.edit');
    }

    public function delete(User $user, FdtLicitacionArchivo $fdtLicitacionArchivo)
    {
        return $user->can('licitaciones.edit');
    }
}
