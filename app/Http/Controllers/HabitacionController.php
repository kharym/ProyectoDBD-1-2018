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
        //
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
