<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Post::all();
        return view('noticias.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('noticias.create');
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
            'url_imagen' => ['required'],
            'titulo' => ['required'],
            'contenido' => ['required'],
        ],
        [
            'url_imagen.required' => 'El campo Imagen es obligatorio',
            'titulo.required' => 'El campo Titulo de Noticia es obligatorio',
            'contenido.required' => 'El campo Contenido es obligatorio',
        ]);

        $registro = new Post();
        if ($request->hasFile('url_imagen')) {
            $uploadPath = public_path('/storage/Noticias/');
            $file = $request->file('url_imagen');
            $extension = $file->getClientOriginalExtension();
            $uuid = Str::uuid(4);
            $fileName = $uuid . '.' . $extension;
            $file->move($uploadPath, $fileName);
            $url = '/storage/Noticias/'.$fileName;
            $registro->url_imagen = $url;
        }
        $registro->titulo = $request->titulo;
        $registro->contenido = $request->contenido;
        $registro->save();

        return redirect('panel-administrativo/noticias')->with('success', 'Registro Guardado Exitósamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $count = Post::where('id', $id)->count();
        if ($count>0) {

            $data = Post::where('id', $id)->first();
            return view('noticias.edit', compact('data'));

        } else {
            return redirect('panel-administrativo/noticias')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $count = Post::where('id', $id)->count();
        if ($count>0) {
            $request->validate([
                'titulo' => ['required'],
                'contenido' => ['required'],
            ],
            [
                'titulo.required' => 'El campo Titulo de Noticia es obligatorio',
                'contenido.required' => 'El campo Contenido es obligatorio',
            ]);

            $registro = Post::where('id', $id)->first();
            if ($request->hasFile('url_imagen')) {
                $uploadPath = public_path('/storage/Noticias/');
                $file = $request->file('url_imagen');
                $extension = $file->getClientOriginalExtension();
                $uuid = Str::uuid(4);
                $fileName = $uuid . '.' . $extension;
                $file->move($uploadPath, $fileName);
                $url = '/storage/Noticias/'.$fileName;
                $registro->url_imagen = $url;
            }
            $registro->titulo = $request->titulo;
            $registro->contenido = $request->contenido;
            $registro->save();

            return redirect('panel-administrativo/noticias')->with('success', 'Registro Actualizado Exitósamente');

        } else {
            return redirect('panel-administrativo/noticias')->with('danger', 'Problemas para Actualizar el Registro.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count = Post::where('id', $id)->count();
        if ($count>0) {
            $data = Post::where('id', $id)->delete();
            return redirect('panel-administrativo/noticias')->with('success', 'Registro Eliminado Exitosamente');
        } else {
            return redirect('panel-administrativo/noticias')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }

    // public function guardarImagen(Request $request)
    // {
    //     if ($request->hasFile('url_imagen')) {
    //         $uploadPath = public_path('/storage/Noticias/');
    //         $file = $request->file('url_imagen');
    //         $extension = $file->getClientOriginalExtension();
    //         $uuid = Str::uuid(4);
    //         $fileName = $uuid . '.' . $extension;
    //         $file->move($uploadPath, $fileName);
    //         $url = '/storage/Noticias/'.$fileName;
    //         $registro->url_imagen = $url;
    //     }
    // }
}
