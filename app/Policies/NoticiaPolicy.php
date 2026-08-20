<?php

namespace App\Policies;

use App\Models\Noticia;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class NoticiaPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->can('noticias.index');
    }

    public function view(User $user, Noticia $noticia)
    {
        return $user->can('noticias.index');
    }

    public function create(User $user)
    {
        return $user->can('noticias.create');
    }

    public function update(User $user, Noticia $noticia)
    {
        return $user->can('noticias.edit');
    }

    public function delete(User $user, Noticia $noticia)
    {
        return $user->can('noticias.destroy');
    }
}
