<?php

namespace App\Http\Controllers;

use App\Traslado;
use Illuminate\Http\Request;

class TrasladoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $traslado = Traslado::all();
        return $traslado;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $traslado = new Traslado();
        $traslado->compra_id= $request->compra_id;
        $traslado->proveedor_traslado_id= $request->proveedor_traslado_id;
        $traslado->ubicacion_id= $request->ubicacion_id;
        $traslado->precioTraslado= $request->precioTraslado;
        $traslado->planificacionParadas= $request->planificacionParadas;
        $traslado->numeroParadas= $request->numeroParadas;
        $traslado->totalPasajeros= $request->totalPasajeros;
        $traslado->fechaTraslado= $request->fechaTraslado;
        $traslado->horaTraslado= $request->horaTraslado;
       
        $traslado->save();

        $todos = Traslado::all();
        return $todos;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Traslado  $traslado
     * @return \Illuminate\Http\Response
     */
    public function show(Traslado $traslado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Traslado  $traslado
     * @return \Illuminate\Http\Response
     */
    public function edit(Traslado $traslado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Traslado  $traslado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Traslado $traslado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Traslado  $traslado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Traslado $traslado)
    {
        //
    }
}
