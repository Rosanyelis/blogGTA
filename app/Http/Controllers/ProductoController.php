<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Producto::all();
        return view('productos.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
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
            'nombre' => ['required'],
            'cantidad' => ['required'],
            'precio' => ['required'],
        ],
        [
            'url_imagen.required' => 'El campo Imagen de Producto es obligatorio',
            'nombre.required' => 'El campo Nombre de Producto es obligatorio',
            'cantidad.required' => 'El campo Cantidad es obligatorio',
            'precio.required' => 'El campo Precio es obligatorio',
        ]);

        $registro = new Producto();
        if ($request->hasFile('url_imagen')) {
            $uploadPath = public_path('/storage/Productos/');
            $file = $request->file('url_imagen');
            $extension = $file->getClientOriginalExtension();
            $uuid = Str::uuid(4);
            $fileName = $uuid . '.' . $extension;
            $file->move($uploadPath, $fileName);
            $url = '/storage/Productos/'.$fileName;
            $registro->url_imagen = $url;
        }
        $registro->nombre = $request->nombre;
        $registro->cantidad = $request->cantidad;
        $registro->precio = $request->precio;
        $registro->save();

        return redirect('panel-administrativo/productos')->with('success', 'Registro Guardado Exitósamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $count = Producto::where('id', $id)->count();
        if ($count>0) {

            $data = Producto::where('id', $id)->first();
            return view('productos.edit', compact('data'));

        } else {
            return redirect('panel-administrativo/productos')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $count = Producto::where('id', $id)->count();
        if ($count>0) {
            $request->validate([
                'nombre' => ['required'],
                'cantidad' => ['required'],
                'precio' => ['required'],
            ],
            [
                'nombre.required' => 'El campo Nombre de Producto es obligatorio',
                'cantidad.required' => 'El campo Cantidad es obligatorio',
                'precio.required' => 'El campo Precio es obligatorio',
            ]);

            $registro = Producto::where('id', $id)->first();
            if ($request->hasFile('url_imagen')) {
                $uploadPath = public_path('/storage/Productos/');
                $file = $request->file('url_imagen');
                $extension = $file->getClientOriginalExtension();
                $uuid = Str::uuid(4);
                $fileName = $uuid . '.' . $extension;
                $file->move($uploadPath, $fileName);
                $url = '/storage/Productos/'.$fileName;
                $registro->url_imagen = $url;
            }
            $registro->nombre = $request->nombre;
            $registro->cantidad = $request->cantidad;
            $registro->precio = $request->precio;
            $registro->save();

            return redirect('panel-administrativo/productos')->with('success', 'Registro Actualizado Exitósamente');

        } else {
            return redirect('panel-administrativo/productos')->with('danger', 'Problemas para Actualizar el Registro.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count = Producto::where('id', $id)->count();
        if ($count>0) {
            $data = Producto::where('id', $id)->delete();
            return redirect('panel-administrativo/productos')->with('success', 'Registro Eliminado Exitosamente');
        } else {
            return redirect('panel-administrativo/productos')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }
}
