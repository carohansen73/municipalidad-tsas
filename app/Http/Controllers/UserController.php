<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Flash;
use Spatie\Permission\Models\Role;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $rules = [
        'apellido' => 'required|string|max:80',
        'nombre' => 'required|string|max:80',
        'email' => 'required|string|email|max:100',
        'password' => 'required|string|min:8'
    ];

    public function index()
    {
        $usuarios=User::all();

        return view('cms.usuarios.index')->with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rols = Role::pluck('name','name')->all();
        return view('cms.usuarios.create',compact('rols'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->validate($this->rules)){
            $user=$request->all();
            $user['password']= Hash::make($user['password']);
            //dd($user);
            $newUser=User::create($user);
            $newUser->assignRole($user['rol']);
            Flash::success('El usuario se creo correctamente.');
            return redirect(route('user.index'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);

        if (empty($user)) {
            Flash::error('No se encontraron datos');

            return redirect(route('user.index'));
        }
        $rols = Role::pluck('name','name')->all();
        //le asigno el rol a la variable usuario para que laravel colective muestre el valor asignado
        if (count($user->getRoleNames())>0){
            $user['rol']=$user->getRoleNames()[0];
        }
        return view('cms.usuarios.edit')
            ->with('user', $user)->with('rols', $rols);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = User::find($id);

        if (empty($usuario)) {
            Flash::error('No se encontraron datos');

            return redirect(route('user.index'));
        }

        $input=$request->all();
        $rules=$this->rules;
        //si cambia la password
        if (isset($request->password)) {
            $input['password']= Hash::make($input['password']);
        }
        else {
            unset($rules['password']);
            unset($input['password']);

        }


        //actualizo los datos en la tabla

        if ($request->validate($rules)){
            $usuario->update($input);
        }
        $usuario->syncRoles($input['rol']);
        Flash::success('El usuario se modifico correctamente.');

        return redirect(route('user.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::find($id);

        if (empty($usuario)) {
            Flash::error('No se encontraron datos');

            return redirect(route('user.index'));
        }

        $usuario->delete();

        Flash::success('El usuario se modifico correctamente.');

        return redirect(route('user.index'));
    }
}
