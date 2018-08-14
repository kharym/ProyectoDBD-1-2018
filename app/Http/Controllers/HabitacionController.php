<?php

namespace App\Http\Controllers;

use App\Habitacione;
use Illuminate\Http\Request;

class HabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $habitacion = Habitacione::all();
        return $habitacion;
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
        $habitacion = new Habitacione();
        $habitacion->compra_id= $request->compra_id;
        $habitacion->alojamiento_id= $request->alojamiento_id;
        $habitacion->precioHabitacion= $request->precioHabitacion;
        $habitacion->calificacion= $request->calificacion;
        $habitacion->numeroAdultos= $request->numeroAdultos;
        $habitacion->numeroNinos= $request->numeroNinos;
        $habitacion->tipoHabitacion= $request->tipoHabitacion;
        $habitacion->fechaIngreso= $request->fechaIngreso;
        $habitacion->horaIngreso= $request->horaIngreso;
        $habitacion->fechaSalida= $request->fechaSalida;
        $habitacion->horaSalida= $request->horaSalida;
       
        $habitacion->save();

        $todos = Habitacione::all();
        return $todos;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Habitacione  $habitacione
     * @return \Illuminate\Http\Response
     */
    public function show(Habitacione $habitacione)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Habitacione  $habitacione
     * @return \Illuminate\Http\Response
     */
    public function edit(Habitacione $habitacione)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Habitacione  $habitacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Habitacione $habitacione)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Habitacione  $habitacione
     * @return \Illuminate\Http\Response
     */
    public function destroy(Habitacione $habitacione)
    {
        //
    }
}
