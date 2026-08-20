<?php

namespace App\Policies;

use App\Models\BoletinOficial;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BoletinOficialPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->can('boletinOficial.index');
    }

    public function view(User $user, BoletinOficial $boletinOficial)
    {
        return $user->can('boletinOficial.index');
    }

    public function create(User $user)
    {
        return $user->can('boletinOficial.create');
    }

    public function update(User $user, BoletinOficial $boletinOficial)
    {
        return $user->can('boletinOficial.edit');
    }

    public function delete(User $user, BoletinOficial $boletinOficial)
    {
        return $user->can('boletinOficial.destroy');
    }
}
