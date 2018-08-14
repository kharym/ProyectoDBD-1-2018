<?php

namespace App\Http\Controllers;

use App\Aerolinea;
use Illuminate\Http\Request;

class AerolineaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aerolinea = Aerolinea::all();
        return $aerolinea;
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
        $aerolinea = new Aerolinea();
        $aerolinea->nombreAerolinea= $request->nombreAerolinea;
        $aerolinea->tipoAerolinea= $request->tipoAerolinea;
        $aerolinea->calificacion= $request->calificacion;
        $aerolinea->save();

        $todos = Aerolinea::all();
        return $todos;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aerolinea  $aerolinea
     * @return \Illuminate\Http\Response
     */
    public function show(Aerolinea $aerolinea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aerolinea  $aerolinea
     * @return \Illuminate\Http\Response
     */
    public function edit(Aerolinea $aerolinea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aerolinea  $aerolinea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aerolinea $aerolinea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aerolinea  $aerolinea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aerolinea $aerolinea)
    {
        //
    }
}
