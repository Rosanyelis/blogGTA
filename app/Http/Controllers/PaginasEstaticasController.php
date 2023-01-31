<?php

namespace App\Http\Controllers;

use App\Models\PaginasEstaticas;
use Illuminate\Http\Request;

class PaginasEstaticasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PaginasEstaticas::all();
        return view('paginas-estaticas.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paginas-estaticas.create');
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
            'nombre' => ['required', 'unique:paginas_estaticas'],
            'contenido' => ['required'],
        ],
        [
            'nombre.required' => 'El campo Nombre es obligatorio',
            'nombre.unique' => 'El Nombre de la Página ya existe',
            'contenido.required' => 'El campo Contenido es obligatorio',
        ]);

        $registro = new PaginasEstaticas();
        $registro->nombre = $request->nombre;
        $registro->contenido = $request->contenido;
        $registro->save();

        return redirect('panel-administrativo/configuraciones/paginas-estaticas')->with('success', 'Registro Guardado Exitósamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaginasEstaticas  $paginasEstaticas
     * @return \Illuminate\Http\Response
     */
    public function show(PaginasEstaticas $paginasEstaticas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaginasEstaticas  $paginasEstaticas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $count = PaginasEstaticas::where('id', $id)->count();
        if ($count>0) {
            $data = PaginasEstaticas::where('id', $id)->first();
            return view('paginas-estaticas.edit', compact('data'));
        } else {
            return redirect('panel-administrativo/configuraciones/paginas-estaticas')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaginasEstaticas  $paginasEstaticas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $count = PaginasEstaticas::where('id', $id)->count();
        if ($count>0) {
            $request->validate([
                'nombre' => ['required'],
                'contenido' => ['required'],
            ],
            [
                'nombre.required' => 'El campo Nombre es obligatorio',
                'contenido.required' => 'El campo Contenido es obligatorio',
            ]);

            $registro = PaginasEstaticas::where('id', $id)->first();
            $registro->nombre = $request->nombre;
            $registro->contenido = $request->contenido;
            $registro->save();

            return redirect('panel-administrativo/configuraciones/paginas-estaticas')->with('success', 'Registro Actualizado Exitosamente');
        } else {
            return redirect('panel-administrativo/configuraciones/paginas-estaticas')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaginasEstaticas  $paginasEstaticas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count = PaginasEstaticas::where('id', $id)->count();
        if ($count>0) {
            $data = PaginasEstaticas::where('id', $id)->delete();
            return redirect('panel-administrativo/configuraciones/paginas-estaticas')->with('success', 'Registro Eliminado Exitosamente');
        } else {
            return redirect('panel-administrativo/configuraciones/paginas-estaticas')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }
}
