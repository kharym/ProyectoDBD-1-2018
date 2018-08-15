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
        $aeropuerto->ubicacion_id= $request->ubicacion_id;
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
    public function show($id)
    {
        $aeropuerto = Aeropuerto::find($id);
        return $aeropuerto;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aeropuerto  $aeropuerto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id)
    {
        $aeropuerto = Aeropuerto::find($id);
        $aeropuerto->ubicacion_id= $request->ubicacion_id;
        $aeropuerto->nombreAeropuerto= $request->nombreAeropuerto;
        $aeropuerto->tipoAeropuerto= $request->tipoAeropuerto;
        $aeropuerto->calificacion= $request->calificacion;
       
        $aeropuerto->save();

        return $aeropuerto;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aeropuerto  $aeropuerto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aeropuerto = Aeropuerto::find($id);
        $aeropuerto->delete();

        return Aeropuerto:: all();
    }
}
