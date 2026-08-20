<?php

namespace App\Policies;

use App\Models\FdtTickets;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class FdtTicketsPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->can('tickets.index');
    }

    public function view(User $user, FdtTickets $fdtTickets)
    {
        return $user->can('tickets.index');
    }

    public function create(User $user)
    {
        return $user->can('tickets.create');
    }

    public function update(User $user, FdtTickets $fdtTickets)
    {
        return $user->can('tickets.edit');
    }

    public function delete(User $user, FdtTickets $fdtTickets)
    {
        return $user->can('tickets.destroy');
    }
}
