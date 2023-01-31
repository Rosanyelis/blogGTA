<?php

namespace App\Http\Controllers;

use App\Models\Faqs;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Faqs::all();
        return view('faqs.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faqs.create');
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
            'titulo' => ['required', 'unique:faqs'],
            'contenido' => ['required'],
        ],
        [
            'titulo.required' => 'El campo Titulo es obligatorio',
            'titulo.unique' => 'La Pregunta ya existe',
            'contenido.required' => 'El campo Contenido es obligatorio',
        ]);

        $registro = new Faqs();
        $registro->titulo = $request->titulo;
        $registro->contenido = $request->contenido;
        $registro->save();

        return redirect('panel-administrativo/configuraciones/preguntas-y-respuestas')->with('success', 'Registro Guardado Exitósamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faqs  $faqs
     * @return \Illuminate\Http\Response
     */
    public function show(Faqs $faqs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faqs  $faqs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $count = Faqs::where('id', $id)->count();
        if ($count>0) {
            $data = Faqs::where('id', $id)->first();
            return view('faqs.edit', compact('data'));
        } else {
            return redirect('panel-administrativo/configuraciones/preguntas-y-respuestas')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faqs  $faqs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $count = Faqs::where('id', $id)->count();
        if ($count>0) {
            $request->validate([
                'titulo' => ['required'],
                'contenido' => ['required'],
            ],
            [
                'titulo.required' => 'El campo Titulo es obligatorio',
                'contenido.required' => 'El campo Contenido es obligatorio',
            ]);

            $registro = Faqs::where('id', $id)->first();
            $registro->titulo = $request->titulo;
            $registro->contenido = $request->contenido;
            $registro->save();

            return redirect('panel-administrativo/configuraciones/preguntas-y-respuestas')->with('success', 'Registro Actualizado Exitosamente');
        } else {
            return redirect('panel-administrativo/configuraciones/preguntas-y-respuestas')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faqs  $faqs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count = Faqs::where('id', $id)->count();
        if ($count>0) {
            $data = Faqs::where('id', $id)->delete();
            return redirect('panel-administrativo/configuraciones/preguntas-y-respuestas')->with('success', 'Registro Eliminado Exitosamente');
        } else {
            return redirect('panel-administrativo/configuraciones/preguntas-y-respuestas')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }
}
