<?php

namespace App\Policies;

use App\Models\Grilla;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class GrillaPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->can('grillas.index');
    }

    public function view(User $user, Grilla $grilla)
    {
        return $user->can('grillas.index');
    }

    public function create(User $user)
    {
        return $user->can('grillas.create');
    }

    public function update(User $user, Grilla $grilla)
    {
        return $user->can('grillas.edit');
    }

    public function delete(User $user, Grilla $grilla)
    {
        return $user->can('grillas.destroy');
    }
}
