<?php

namespace App\Http\Controllers;

use App\Alojamiento;
use Illuminate\Http\Request;

class AlojamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alojamiento = Alojamiento::all();
        return $alojamiento;
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
        $alojamiento = new Alojamiento();
        $alojamiento->ubicacion_id= $request->ubicacion_id;
        $alojamiento->nombreAlojamiento= $request->nombreAlojamiento;
        $alojamiento->calificacion= $request->calificacion;
       
        $alojamiento->save();

        $todos = Alojamiento::all();
        return $todos;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alojamiento  $alojamiento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alojamiento = Alojamiento::find($id);
        return $alojamiento;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alojamiento  $alojamiento
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
     * @param  \App\Alojamiento  $alojamiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $alojamiento = Alojamiento::find($id);
        $alojamiento->ubicacion_id= $request->ubicacion_id;
        $alojamiento->nombreAlojamiento= $request->nombreAlojamiento;
        $alojamiento->calificacion= $request->calificacion;
       
        $alojamiento->save();

        return $alojamiento;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alojamiento  $alojamiento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alojamiento = Alojamiento::find($id);
        $alojamiento->delete();

        return Alojamiento:: all();
    }
}
