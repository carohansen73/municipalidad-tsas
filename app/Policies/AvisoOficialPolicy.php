<?php

namespace App\Policies;

use App\Models\AvisoOficial;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AvisoOficialPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->can('avisoOficial.index');
    }

    public function view(User $user, AvisoOficial $avisoOficial)
    {
        return $user->can('avisoOficial.index');
    }

    public function create(User $user)
    {
        return $user->can('avisoOficial.create');
    }

    public function update(User $user, AvisoOficial $avisoOficial)
    {
        return $user->can('avisoOficial.edit');
    }

    public function delete(User $user, AvisoOficial $avisoOficial)
    {
        return $user->can('avisoOficial.destroy');
    }
}
