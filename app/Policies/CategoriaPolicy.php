<?php

namespace App\Policies;

use App\Models\Categoria;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoriaPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->can('categorias.index');
    }

    public function view(User $user, Categoria $categoria)
    {
        return $user->can('categorias.index');
    }

    public function create(User $user)
    {
        return $user->can('categorias.create');
    }

    public function update(User $user, Categoria $categoria)
    {
        return $user->can('categorias.edit');
    }

    public function delete(User $user, Categoria $categoria)
    {
        return $user->can('categorias.destroy');
    }
}
