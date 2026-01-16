<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionController extends Controller
{
    public function create()
    {
        $roles = Role::all();

        return view('cms.permissions.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:permissions,name',
            'descripcion' => 'required|string|max:255',
            'orden' => 'nullable|integer|min:1|max:32767',
            'roles' => 'nullable|array',
            'roles.*' => 'exists:roles,id',
        ]);

        // Orden +1
        $orden = (Permission::max('orden') ?? 0) + 1;

        $permission = Permission::create([
            'name' => $request->name,
            'descripcion' => $request->descripcion,
            'guard_name' => 'web',
            'orden' => $orden,
        ]);

        if ($request->filled('roles')) {
            $permission->syncRoles($request->roles);
        }

        // 🔴 MUY IMPORTANTE
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        return redirect()->route('rols.index')
            ->with('success', 'Permiso creado correctamente');
    }
}
