<?php

namespace App\Http\Controllers;

use App\Vuelo;
use Illuminate\Http\Request;

class VueloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vuelo = Vuelo::all();
        return $vuelo;
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
        $vuelo = new Vuelo();
        $vuelo->compra_id= $request->compra_id;
        $vuelo->aerolinea_id= $request->aerolinea_id;
        $vuelo->aeropuertoOrigen_id= $request->aeropuertoOrigen_id;
        $vuelo->aeropuertoDestino_id= $request->aeropuertoDestino_id;
        $vuelo->tipoVuelo= $request->tipoVuelo;
        $vuelo->precioVuelo= $request->precioVuelo;
        $vuelo->numeroEscala= $request->numeroEscala;
        $vuelo->cantidadEquipaje= $request->cantidadEquipaje;
        $vuelo->fechaPartida= $request->fechaPartida;
        $vuelo->horaPartida= $request->horaPartida;
        $vuelo->fechaRegreso= $request->fechaRegreso;
        $vuelo->horaRegreso= $request->horaRegreso;
       
        $vuelo->save();

        $todos = Vuelo::all();
        return $todos;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vuelo  $vuelo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vuelo = Vuelo::find($id);
        return $vuelo;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vuelo  $vuelo
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
     * @param  \App\Vuelo  $vuelo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $vuelo = Vuelo::find($id);
        $vuelo->compra_id= $request->compra_id;
        $vuelo->aerolinea_id= $request->aerolinea_id;
        $vuelo->aeropuertoOrigen_id= $request->aeropuertoOrigen_id;
        $vuelo->aeropuertoDestino_id= $request->aeropuertoDestino_id;
        $vuelo->tipoVuelo= $request->tipoVuelo;
        $vuelo->precioVuelo= $request->precioVuelo;
        $vuelo->numeroEscala= $request->numeroEscala;
        $vuelo->cantidadEquipaje= $request->cantidadEquipaje;
        $vuelo->fechaPartida= $request->fechaPartida;
        $vuelo->horaPartida= $request->horaPartida;
        $vuelo->fechaRegreso= $request->fechaRegreso;
        $vuelo->horaRegreso= $request->horaRegreso;
       
        $vuelo->save();

        return $vuelo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vuelo  $vuelo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vuelo = Vuelo::find($id);
        $vuelo->delete();

        return Vuelo:: all();
    }
}
