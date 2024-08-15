<?php

namespace App\Http\Controllers;

/*use App\Http\Requests\CreateRolRequest;
use App\Http\Requests\UpdateRolRequest;
use App\Repositories\RolRepository;*/
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolController extends AppBaseController
{

    public function index(Request $request)
    {
        $rols = Role::all();

        return view('cms.rols.index')
            ->with('rols', $rols);
    }

    /**
     * Show the form for creating a new Rol.
     *
     * @return Response
     */
    public function create()
    {
        $permisos= Permission::orderBy('orden','asc')->get();
        return view('cms.rols.create',compact('permisos'));
    }


    public function store(Request $request)
    {
        $input['name'] = $request->name;

        $rol = Role::create($input);

        $rol->syncPermissions($request->permissions);

        Flash::success('El rol se guardo correctamente.');

        return redirect(route('rols.index'));
    }


    public function show($id)
    {
        $rol = Role::find($id);

        if (empty($rol)) {
            Flash::error('No se encontraron registros');

            return redirect(route('rols.index'));
        }

        return view('cms.rols.show')->with('rol', $rol);
    }

    /**
     * Show the form for editing the specified Rol.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rol = Role::find($id);

        if (empty($rol)) {
            Flash::error('No se encontraron registros');

            return redirect(route('rols.index'));
        }
        $permisos= Permission::orderBy('orden','asc')->get();


        return view('cms.rols.edit', compact(['permisos','rol']));
    }


    public function update($id, Request $request)
    {
        $rol = Role::find($id);

        if (empty($rol)) {
            Flash::error('No se encontraron registros');

            return redirect(route('rols.index'));
        }

        //$rol->update($request->all());
        $rol->syncPermissions($request->permissions);
        Flash::success('El rol se guardo correctamente.');

        return redirect(route('rols.index'));
    }


    public function destroy($id)
    {
        $rol = Role::find($id);

        if (empty($rol)) {
            Flash::error('No se encontro el registro');

            return redirect(route('rols.index'));
        }

       $rol->delete();

        Flash::success('Rol eliminado correctamente.');

        return redirect(route('rols.index'));
    }
}
