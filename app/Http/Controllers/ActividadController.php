<?php

namespace App\Http\Controllers;

use App\Actividad;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividad = Actividad::all();
        return $actividad;
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
        $actividad = new Actividad();
        $actividad->compra_id= $request->compra_id;
        $actividad->nombreActividad= $request->nombreActividad;
        $actividad->precioActividad= $request->precioActividad;
        $actividad->descripcion= $request->descripcion;
        $actividad->numeroNinos= $request->numeroNinos;
        $actividad->numeroAdultos= $request->numeroAdultos;
        $actividad->fechaInicio= $request->fechaInicio;
        $actividad->horaInicio= $request->horaInicio;
        $actividad->fechaTermino= $request->fechaTermino;
        $actividad->horaTermino= $request->horaTermino;
        $actividad->save();

        $todos = Actividad::all();
        return $todos;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function show(Actividad $actividad)
    {
        $actividad = Actividad::find($id);
        return $actividad;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function edit(Actividad $actividad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actividad $actividad)
    {
        $actividad = Actividad::find($id);
        $actividad->compra_id= $request->compra_id;
        $actividad->nombreActividad= $request->nombreActividad;
        $actividad->precioActividad= $request->precioActividad;
        $actividad->descripcion= $request->descripcion;
        $actividad->numeroNinos= $request->numeroNinos;
        $actividad->numeroAdultos= $request->numeroAdultos;
        $actividad->fechaInicio= $request->fechaInicio;
        $actividad->horaInicio= $request->horaInicio;
        $actividad->fechaTermino= $request->fechaTermino;
        $actividad->horaTermino= $request->horaTermino;
        $actividad->save();

        return $actividad;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actividad $actividad)
    {
        $actividad = Actividad::find($id);
        $actividad->delete();

        return Actividad:: all();
    }
}
