<?php

namespace App\Policies;

use App\Models\LineUp;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class LineUpPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->can('lineUps.index');
    }

    public function view(User $user, LineUp $lineUp)
    {
        return $user->can('lineUps.index');
    }

    public function create(User $user)
    {
        return $user->can('lineUps.create');
    }

    public function update(User $user, LineUp $lineUp)
    {
        return $user->can('lineUps.edit');
    }

    public function delete(User $user, LineUp $lineUp)
    {
        return $user->can('lineUps.destroy');
    }
}
