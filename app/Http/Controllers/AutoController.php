<?php

namespace App\Http\Controllers;

use App\Auto;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auto = Auto::all();
        return $auto;
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
        $auto = new Auto();
        $auto->compra_id= $request->compra_id;
        $auto->proveedor_auto_id= $request->proveedor_auto_id;
        $auto->patente= $request->patente;
        $auto->precio= $request->precio;
        $auto->marca= $request->marca;
        $auto->modelo= $request->modelo;
        $auto->fechaArriendo= $request->fechaArriendo;
        $auto->horaArriendo= $request->horaArriendo;
        $auto->fechaDevolucion= $request->fechaDevolucion;
        $auto->horaDevolucion= $request->horaDevolucion;
       
        $auto->save();

        $todos = Auto::all();
        return $todos;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $auto = Auto::find($id);
        return $auto;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Auto  $auto
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
     * @param  \App\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $auto = Auto::find($id);
        $auto->compra_id= $request->compra_id;
        $auto->proveedor_auto_id= $request->proveedor_auto_id;
        $auto->patente= $request->patente;
        $auto->precio= $request->precio;
        $auto->marca= $request->marca;
        $auto->modelo= $request->modelo;
        $auto->fechaArriendo= $request->fechaArriendo;
        $auto->horaArriendo= $request->horaArriendo;
        $auto->fechaDevolucion= $request->fechaDevolucion;
        $auto->horaDevolucion= $request->horaDevolucion;
       
        $auto->save();

        return $auto;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $auto = Auto::find($id);
        $auto->delete();

        return Auto:: all();
    }
}
