<?php

namespace App\Http\Controllers;

use App\Models\RedesSociales;
use Illuminate\Http\Request;

class RedesSocialesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = RedesSociales::all();
        return view('redes-sociales.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('redes-sociales.create');
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
            'nombre' => ['required', 'unique:redes_sociales'],
            'url' => ['required'],
        ],
        [
            'nombre.required' => 'El campo Nombre es obligatorio',
            'nombre.unique' => 'La Red Social ya existe',
            'url.required' => 'El campo Url es obligatorio',
        ]);

        $registro = new RedesSociales();
        $registro->nombre = $request->nombre;
        $registro->url = $request->url;
        $registro->save();

        return redirect('panel-administrativo/configuraciones/redes-sociales')->with('success', 'Registro Guardado Exitósamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RedesSociales  $redesSociales
     * @return \Illuminate\Http\Response
     */
    public function show(RedesSociales $redesSociales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RedesSociales  $redesSociales
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $count = RedesSociales::where('id', $id)->count();
        if ($count>0) {
            $data = RedesSociales::where('id', $id)->first();
            return view('redes-sociales.edit', compact('data'));
        } else {
            return redirect('panel-administrativo/configuraciones/redes-sociales')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RedesSociales  $redesSociales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $count = RedesSociales::where('id', $id)->count();
        if ($count>0) {
            $request->validate([
                'url' => ['required'],
            ],
            [
                'url.required' => 'El campo Url es obligatorio',
            ]);

            $registro = RedesSociales::where('id', $id)->first();
            $registro->url = $request->url;
            $registro->save();

            return redirect('panel-administrativo/configuraciones/redes-sociales')->with('success', 'Registro Actualizado Exitosamente');
        } else {
            return redirect('panel-administrativo/configuraciones/redes-sociales')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RedesSociales  $redesSociales
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count = RedesSociales::where('id', $id)->count();
        if ($count>0) {
            $data = RedesSociales::where('id', $id)->delete();
            return redirect('panel-administrativo/configuraciones/redes-sociales')->with('success', 'Registro Eliminado Exitosamente');
        } else {
            return redirect('panel-administrativo/configuraciones/redes-sociales')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }
}
