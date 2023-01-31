<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Rol::all();
        return view('roles.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.create');
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
            'nombre' => ['required', 'unique:roles'],
            'descripcion' => ['required'],
        ],
        [
            'nombre.required' => 'El campo Rol es obligatorio',
            'nombre.unique' => 'El Rol ya existe',
            'descripcion.required' => 'El campo Descripción es obligatorio',
        ]);

        $registro = new Rol();
        $registro->nombre = $request->nombre;
        $registro->descripcion = $request->descripcion;
        $registro->save();

        return redirect('panel-administrativo/configuraciones/roles')->with('success', 'Registro Guardado Exitósamente');
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
        $count = Rol::where('id', $id)->count();
        if ($count>0) {
            $data = Rol::where('id', $id)->first();
            return view('roles.edit', compact('data'));
        } else {
            return redirect('panel-administrativo/configuraciones/roles')->with('danger', 'Problemas para Mostrar el Registro.');
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
        $count = Rol::where('id', $id)->count();
        if ($count>0) {
            $request->validate([
                'nombre' => ['required'],
                'descripcion' => ['required'],
            ],
            [
                'nombre.required' => 'El campo Rol es obligatorio',
                'descripcion.required' => 'El campo Descripción es obligatorio',
            ]);

            $registro = Rol::where('id', $id)->first();
            $registro->nombre = $request->nombre;
            $registro->descripcion = $request->descripcion;
            $registro->save();

            return redirect('panel-administrativo/configuraciones/roles')->with('success', 'Registro Actualizado Exitosamente');
        } else {
            return redirect('panel-administrativo/configuraciones/roles')->with('danger', 'Problemas para Mostrar el Registro.');
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
        $count = Rol::where('id', $id)->count();
        if ($count>0) {
            $user = User::where('rol_id', $id)->count();
            if ($user>0) {
                return redirect('panel-administrativo/configuraciones/roles')->with('danger', 'No se puede eliminar el registro, hay usuarios asignados al rol.');
            }
            $data = Rol::where('id', $id)->delete();
            return redirect('panel-administrativo/configuraciones/roles')->with('success', 'Registro Eliminado Exitosamente');
        } else {
            return redirect('panel-administrativo/configuraciones/roles')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }
}
