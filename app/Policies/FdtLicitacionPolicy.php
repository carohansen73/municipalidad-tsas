<?php

namespace App\Policies;

use App\Models\FdtLicitacion;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class FdtLicitacionPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->can('licitaciones.index');
    }

    public function view(User $user, FdtLicitacion $licitacion)
    {
        return $user->can('licitaciones.index');
    }

    public function create(User $user)
    {
        return $user->can('licitaciones.create');
    }

    public function update(User $user, FdtLicitacion $licitacion)
    {
        return $user->can('licitaciones.edit');
    }

    public function delete(User $user, FdtLicitacion $licitacion)
    {
        return $user->can('licitaciones.destroy');
    }
}
