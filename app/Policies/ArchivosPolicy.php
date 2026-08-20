<?php

namespace App\Policies;

use App\Models\Archivos;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ArchivosPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->can('archivos.index');
    }

    public function view(User $user, Archivos $archivos)
    {
        return $user->can('archivos.index');
    }

    public function create(User $user)
    {
        return $user->can('archivos.create');
    }

    public function update(User $user, Archivos $archivos)
    {
        return $user->can('archivos.edit');
    }

    public function delete(User $user, Archivos $archivos)
    {
        return $user->can('archivos.destroy');
    }
}
