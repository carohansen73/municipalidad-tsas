<?php

namespace App\Policies;

use App\Models\SituacionFinanciera;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SituacionFinancieraPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->can('situacionFinanciera.index');
    }

    public function view(User $user, SituacionFinanciera $situacionFinanciera)
    {
        return $user->can('situacionFinanciera.index');
    }

    public function create(User $user)
    {
        return $user->can('situacionFinanciera.create');
    }

    public function update(User $user, SituacionFinanciera $situacionFinanciera)
    {
        return $user->can('situacionFinanciera.edit');
    }

    public function delete(User $user, SituacionFinanciera $situacionFinanciera)
    {
        return $user->can('situacionFinanciera.destroy');
    }
}
