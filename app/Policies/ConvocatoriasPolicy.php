<?php

namespace App\Policies;

use App\Models\Convocatorias;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ConvocatoriasPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->can('convocatorias.index');
    }

    public function view(User $user, Convocatorias $convocatorias)
    {
        return $user->can('convocatorias.index');
    }

    public function create(User $user)
    {
        return $user->can('convocatorias.create');
    }

    public function update(User $user, Convocatorias $convocatorias)
    {
        return $user->can('convocatorias.edit');
    }

    public function delete(User $user, Convocatorias $convocatorias)
    {
        return $user->can('convocatorias.destroy');
    }
}
