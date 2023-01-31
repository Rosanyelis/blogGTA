<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::where('rol_id', '!=', 1)->get();
        return view('usuarios.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Rol::where('nombre', '!=' ,'Superadmin')->get();
        return view('usuarios.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', /*'confirmed', Rules\Password::defaults()*/],
            'rol_id' => ['required'],
        ]);

        $user = User::create([
            'rol_id' => $request->rol_id,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('panel-administrativo/configuraciones/usuarios')->with('success', 'Se ha Registrado el Usuario con éxito');
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
        $count = User::where('id', $id)->count();
        if ($count>0) {
            $data = User::where('id', $id)->first();
            $roles = Rol::where('nombre', '!=' ,'Superadmin')->get();
            return view('usuarios.edit', compact('data', 'roles'));
        }else{
            return redirect('panel-administrativo/configuraciones/usuarios')->with('danger', 'Problemas para Mostrar el Registro.');
        }
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
        $count = User::where('id', $id)->count();
        if ($count>0) {
            $request->validate([
                'username' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'rol_id' => ['required'],
            ]);

            $registro = User::where('id', $id)->first();
            $registro->rol_id = $request->rol_id;
            $registro->username = $request->username;
            $registro->email = $request->email;
            $registro->password = Hash::make($request->password);
            $registro->save();

            return redirect('panel-administrativo/configuraciones/usuarios')->with('success', 'Registro Actualizado Exitosamente');
        } else {
            return redirect('panel-administrativo/configuraciones/usuarios')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count = User::where('id', $id)->count();
        if ($count>0) {
            $registro = User::where('id', $id)->delete();
            return redirect('panel-administrativo/configuraciones/usuarios')->with('success', 'Registro Eliminado Exitósamente');
        }else{
            return redirect('panel-administrativo/configuraciones/usuarios')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }
}
