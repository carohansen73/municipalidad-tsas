<?php

namespace App\Policies;

use App\Models\Institucion;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class InstitucionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return $user->can('instituciones.index');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Institucion  $institucion
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Institucion $institucion)
    {
        return $user->can('instituciones.index');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('instituciones.create');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Institucion  $institucion
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Institucion $institucion)
    {
        return $user->can('instituciones.edit');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Institucion  $institucion
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Institucion $institucion)
    {
        return $user->can('instituciones.destroy');
    }
}
