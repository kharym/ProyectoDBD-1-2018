<?php

namespace App\Http\Controllers;

use App\ProveedorTraslado;
use Illuminate\Http\Request;

class ProveedorTrasladoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedorTraslado = ProveedorTraslado::all();
        return $proveedorTraslado;
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
        $proveedorTraslado = new ProveedorTraslado();
        $proveedorTraslado->nombreProveedorTraslado= $request->nombreProveedorTraslado;
        $proveedorTraslado->telefono= $request->telefono;
        $proveedorTraslado->correo= $request->correo;
       
        $proveedorTraslado->save();

        $todos = ProveedorTraslado::all();
        return $todos;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProveedorTraslado  $proveedorTraslado
     * @return \Illuminate\Http\Response
     */
    public function show(ProveedorTraslado $proveedorTraslado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProveedorTraslado  $proveedorTraslado
     * @return \Illuminate\Http\Response
     */
    public function edit(ProveedorTraslado $proveedorTraslado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProveedorTraslado  $proveedorTraslado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProveedorTraslado $proveedorTraslado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProveedorTraslado  $proveedorTraslado
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProveedorTraslado $proveedorTraslado)
    {
        //
    }
}
