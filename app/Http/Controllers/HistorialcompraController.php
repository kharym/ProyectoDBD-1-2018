<?php

namespace App\Http\Controllers;

use App\Historialcompra;
use Illuminate\Http\Request;

class HistorialcompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historialcompra = Historialcompra::all();
        return $historialcompra;
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
        $historialcompra = new Historialcompra();
        $historialcompra->compra_id= $request->compra_id;
        $historialcompra->fechaCompra= $request->fechaCompra;
        $historialcompra->horaCompra= $request->horaCompra;
        $historialcompra->tipoCompra= $request->tipoCompra;
        $historialcompra->metodoDePago= $request->metodoDePago;
        $historialcompra->monto= $request->monto;
        $historialcompra->descripcion= $request->descripcion;
       
        $historialcompra->save();

        $todos = Historialcompra::all();
        return $todos;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Historialcompra  $historialcompra
     * @return \Illuminate\Http\Response
     */
    public function show(Historialcompra $historialcompra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Historialcompra  $historialcompra
     * @return \Illuminate\Http\Response
     */
    public function edit(Historialcompra $historialcompra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Historialcompra  $historialcompra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Historialcompra $historialcompra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Historialcompra  $historialcompra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Historialcompra $historialcompra)
    {
        //
    }
}
