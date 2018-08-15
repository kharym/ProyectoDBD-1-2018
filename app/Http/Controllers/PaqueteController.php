<?php

namespace App\Http\Controllers;

use App\Paquete;
use Illuminate\Http\Request;

class PaqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paquete = Paquete::all();
        return $paquete;
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
        $paquete = new Paquete();
        $paquete->precioDescuento= $request->precioDescuento;
        $paquete->tipoPaquete= $request->tipoPaquete;
        $paquete->precioNormal= $request->precioNormal;
        $paquete->descripcion= $request->descripcion;
       
        $paquete->save();

        $todos = Paquete::all();
        return $todos;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paquete  $paquete
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paquete = Paquete::find($id);
        return $paquete;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paquete  $paquete
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paquete  $paquete
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $paquete = Paquete::find($id);
        $paquete->precioDescuento= $request->precioDescuento;
        $paquete->tipoPaquete= $request->tipoPaquete;
        $paquete->precioNormal= $request->precioNormal;
        $paquete->descripcion= $request->descripcion;
       
        $paquete->save();

        return $paquete;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paquete  $paquete
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paquete = Paquete::find($id);
        $paquete->delete();

        return Paquete:: all();
    }
}
