<?php

namespace App\Http\Controllers;

use App\Models\PaginasEstaticas;
use App\Models\Post;
use App\Models\RedesSociales;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = Post::latest()->take(2)->get();
        $redes = RedesSociales::all();
        return view('web.web', compact('redes', 'noticias'));
    }

    public function noticiasweb()
    {
        // $noticias
        $noticias = Post::all();
        $count = Post::count();
        $redes = RedesSociales::all();
        return view('web.noticias', compact('noticias', 'redes', 'count'));
    }

    // public function articulo($id)
    // {
    //     // $noticias
    //     $articulo = Post::where('id', $id)->first();
    //     return view('', compact('articulo'));
    // }

    public function politicasPrivacidad()
    {
        // $noticias
        $redes = RedesSociales::all();
        $politicasP = PaginasEstaticas::where('nombre', 'politica-privacidad')->first();
        return view('web.politicas-privacidad', compact('politicasP', 'redes'));
    }

    public function PoliticasReembolso()
    {
        // $noticias
        $redes = RedesSociales::all();
        $politicasR = PaginasEstaticas::where('nombre', 'politica-reembolso')->first();
        return view('web.politicas-reembolso', compact('politicasR', 'redes'));
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function noticias()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
