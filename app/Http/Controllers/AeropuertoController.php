<?php

namespace App\Http\Controllers;

use App\Aeropuerto;
use Illuminate\Http\Request;

class AeropuertoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aeropuerto = Aeropuerto::all();
        return $aeropuerto;
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
        $aeropuerto = new Aeropuerto();
        $aeropuerto->latitud_id= $request->latitud_id;
        $aeropuerto->longitud_id= $request->longitud_id;
        $aeropuerto->nombreAeropuerto= $request->nombreAeropuerto;
        $aeropuerto->tipoAeropuerto= $request->tipoAeropuerto;
        $aeropuerto->calificacion= $request->calificacion;
       
        $aeropuerto->save();

        $todos = Aeropuerto::all();
        return $todos;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aeropuerto  $aeropuerto
     * @return \Illuminate\Http\Response
     */
    public function show(Aeropuerto $aeropuerto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aeropuerto  $aeropuerto
     * @return \Illuminate\Http\Response
     */
    public function edit(Aeropuerto $aeropuerto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aeropuerto  $aeropuerto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aeropuerto $aeropuerto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aeropuerto  $aeropuerto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aeropuerto $aeropuerto)
    {
        //
    }
}
