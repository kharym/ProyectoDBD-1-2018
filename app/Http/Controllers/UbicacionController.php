<?php

namespace App\Http\Controllers;

use App\Ubicacione;
use Illuminate\Http\Request;

class UbicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ubicacion = Ubicacione::all();
        return $ubicacion;
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
        $ubicacion = new Ubicacione();
        $ubicacion->latitud= $request->latitud;
        $ubicacion->longitud= $request->longitud;
        $ubicacion->ciudad= $request->ciudad;
        $ubicacion->pais= $request->pais;
        $ubicacion->calleUbicacion= $request->calleUbicacion;
        $ubicacion->numeroUbicacion= $request->numeroUbicacion;
        $ubicacion->codigoPostal= $request->codigoPostal;
       
        $ubicacion->save();

        $todos = Ubicacione::all();
        return $todos;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ubicacione  $ubicacione
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ubicacion = Ubicacione::find($id);
        return $ubicacion;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ubicacione  $ubicacione
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
     * @param  \App\Ubicacione  $ubicacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ubicacion = Ubicacione::find($id);
        $ubicacion->latitud= $request->latitud;
        $ubicacion->longitud= $request->longitud;
        $ubicacion->ciudad= $request->ciudad;
        $ubicacion->pais= $request->pais;
        $ubicacion->calleUbicacion= $request->calleUbicacion;
        $ubicacion->numeroUbicacion= $request->numeroUbicacion;
        $ubicacion->codigoPostal= $request->codigoPostal;
       
        $ubicacion->save();

        return $ubicacion;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ubicacione  $ubicacione
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ubicacion = Ubicacione::find($id);
        $ubicacion->delete();

        return Ubicacione:: all();
    }
}
