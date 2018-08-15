<?php

namespace App\Http\Controllers;

use App\Asiento;
use Illuminate\Http\Request;

class AsientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asiento = Asiento::all();
        return $asiento;
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
        $asiento = new Asiento();
        $asiento->vuelo_id= $request->vuelo_id;
        $asiento->disponibilidad= $request->disponibilidad;
        $asiento->numeroAsiento= $request->numeroAsiento;
        $asiento->tipoAsiento= $request->tipoAsiento;
       
        $asiento->save();

        $todos = Asiento::all();
        return $todos;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Asiento  $asiento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asiento = Asiento::find($id);
        return $asiento;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Asiento  $asiento
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
     * @param  \App\Asiento  $asiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $asiento = Asiento::find($id);
        $asiento->vuelo_id= $request->vuelo_id;
        $asiento->disponibilidad= $request->disponibilidad;
        $asiento->numeroAsiento= $request->numeroAsiento;
        $asiento->tipoAsiento= $request->tipoAsiento;
       
        $asiento->save();

        return $asiento;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Asiento  $asiento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asiento = Asiento::find($id);
        $asiento->delete();

        return Asiento:: all();
    }
}
