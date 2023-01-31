<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Categoria::all();
        return view('categorias-noticias.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorias-noticias.create');
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
            'nombre' => ['required', 'unique:categorias'],
        ],
        [
            'nombre.required' => 'El campo Nombre es obligatorio',
            'nombre.unique' => 'La Categoría ya existe',
        ]);

        $registro = new Categoria();
        $registro->nombre = $request->nombre;
        $registro->save();

        return redirect('panel-administrativo/configuraciones/categorias-de-noticias')->with('success', 'Registro Guardado Exitósamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $count = Categoria::where('id', $id)->count();
        if ($count>0) {
            $data = Categoria::where('id', $id)->first();
            return view('categorias-noticias.edit', compact('data'));
        } else {
            return redirect('panel-administrativo/configuraciones/categorias-de-noticias')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $count = Categoria::where('id', $id)->count();
        if ($count>0) {
            $request->validate([
                'nombre' => ['required'],
            ],
            [
                'nombre.required' => 'El campo Nombre es obligatorio',
            ]);

            $registro = Categoria::where('id', $id)->first();
            $registro->nombre = $request->nombre;
            $registro->save();

            return redirect('panel-administrativo/configuraciones/categorias-de-noticias')->with('success', 'Registro Actualizado Exitosamente');
        } else {
            return redirect('panel-administrativo/configuraciones/categorias-de-noticias')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count = Categoria::where('id', $id)->count();
        if ($count>0) {
            $data = Categoria::where('id', $id)->delete();
            return redirect('panel-administrativo/configuraciones/categorias-de-noticias')->with('success', 'Registro Actualizado Exitosamente');
        } else {
            return redirect('panel-administrativo/configuraciones/categorias-de-noticias')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }
}
