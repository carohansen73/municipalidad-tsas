<?php

namespace App\Policies;

use App\Models\InscripcionSorteo;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class InscripcionSorteoPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->can('sorteo.index');
    }

    public function view(User $user, InscripcionSorteo $inscripcionSorteo)
    {
        return $user->can('sorteo.index');
    }
}
