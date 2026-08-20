<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->can('user.index');
    }

    public function view(User $user, User $model)
    {
        return $user->can('user.index');
    }

    public function create(User $user)
    {
        return $user->can('user.create');
    }

    public function update(User $user, User $model)
    {
        return $user->can('user.edit');
    }

    public function delete(User $user, User $model)
    {
        return $user->can('user.destroy');
    }
}
