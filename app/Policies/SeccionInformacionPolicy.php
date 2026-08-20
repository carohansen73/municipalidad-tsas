<?php

namespace App\Policies;

use App\Models\SeccionInformacion;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SeccionInformacionPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->can('seccionInformacion.index');
    }

    public function view(User $user, SeccionInformacion $seccionInformacion)
    {
        return $user->can('seccionInformacion.index');
    }

    public function create(User $user)
    {
        return $user->can('seccionInformacion.create');
    }

    public function update(User $user, SeccionInformacion $seccionInformacion)
    {
        return $user->can('seccionInformacion.edit');
    }

    public function delete(User $user, SeccionInformacion $seccionInformacion)
    {
        return $user->can('seccionInformacion.destroy');
    }
}
