<?php

namespace App\Policies;

use App\Models\Evento;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EventoPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->can('eventos.index');
    }

    public function view(User $user, Evento $evento)
    {
        return $user->can('eventos.index');
    }

    public function create(User $user)
    {
        return $user->can('eventos.create');
    }

    public function update(User $user, Evento $evento)
    {
        return $user->can('eventos.edit');
    }

    public function delete(User $user, Evento $evento)
    {
        return $user->can('eventos.destroy');
    }
}
