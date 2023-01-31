<?php

namespace App\Http\Controllers;

use App\Models\Categoriap;
use Illuminate\Http\Request;

class CategoriapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Categoriap::all();
        return view('categorias-productos.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorias-productos.create');
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
            'nombre' => ['required', 'unique:categoriasp'],
        ],
        [
            'nombre.required' => 'El campo Nombre es obligatorio',
            'nombre.unique' => 'La Categoría ya existe',
        ]);

        $registro = new Categoriap();
        $registro->nombre = $request->nombre;
        $registro->save();

        return redirect('panel-administrativo/configuraciones/categorias-de-productos')->with('success', 'Registro Guardado Exitósamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoriap  $categoriap
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoriap  $categoriap
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $count = Categoriap::where('id', $id)->count();
        if ($count>0) {
            $data = Categoriap::where('id', $id)->first();
            return view('categorias-productos.edit', compact('data'));
        } else {
            return redirect('panel-administrativo/configuraciones/categorias-de-productos')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoriap  $categoriap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $count = Categoriap::where('id', $id)->count();
        if ($count>0) {
            $request->validate([
                'nombre' => ['required'],
            ],
            [
                'nombre.required' => 'El campo Nombre es obligatorio',
            ]);

            $registro = Categoriap::where('id', $id)->first();
            $registro->nombre = $request->nombre;
            $registro->save();

            return redirect('panel-administrativo/configuraciones/categorias-de-productos')->with('success', 'Registro Actualizado Exitosamente');
        } else {
            return redirect('panel-administrativo/configuraciones/categorias-de-productos')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoriap  $categoriap
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count = Categoriap::where('id', $id)->count();
        if ($count>0) {
            $data = Categoriap::where('id', $id)->delete();
            return redirect('panel-administrativo/configuraciones/categorias-de-productos')->with('success', 'Registro Actualizado Exitosamente');
        } else {
            return redirect('panel-administrativo/configuraciones/categorias-de-productos')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }
}
