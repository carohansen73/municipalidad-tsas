<?php

namespace App\Policies;

use App\Models\ReporteEconomico;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReporteEconomicoPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->can('reporteEconomico.index');
    }

    public function view(User $user, ReporteEconomico $reporteEconomico)
    {
        return $user->can('reporteEconomico.index');
    }

    public function create(User $user)
    {
        return $user->can('reporteEconomico.create');
    }

    public function update(User $user, ReporteEconomico $reporteEconomico)
    {
        return $user->can('reporteEconomico.edit');
    }

    public function delete(User $user, ReporteEconomico $reporteEconomico)
    {
        return $user->can('reporteEconomico.destroy');
    }
}
