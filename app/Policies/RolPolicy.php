<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Spatie\Permission\Models\Role;

class RolPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->can('rols.index');
    }

    public function view(User $user, Role $role)
    {
        return $user->can('rols.index');
    }

    public function create(User $user)
    {
        return $user->can('rols.create');
    }

    public function update(User $user, Role $role)
    {
        return $user->can('rols.edit');
    }

    public function delete(User $user, Role $role)
    {
        return $user->can('rols.destroy');
    }
}
