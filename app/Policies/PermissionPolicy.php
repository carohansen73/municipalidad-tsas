<?php

namespace App\Policies;

use App\Models\Permission;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PermissionPolicy
{
    use HandlesAuthorization;

    /**
     * Solo Admin puede crear permisos, igual que ya filtra el link del menú (@role('Admin')).
     */
    public function create(User $user)
    {
        return $user->hasRole('Admin');
    }
}
