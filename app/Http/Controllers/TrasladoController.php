<?php

namespace App\Http\Controllers;

use App\Traslado;
use Illuminate\Http\Request;

class TrasladoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $traslado = Traslado::all();
        return $traslado;
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
     * @param  \App\Traslado  $traslado
     * @return \Illuminate\Http\Response
     */
    public function show(Traslado $traslado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Traslado  $traslado
     * @return \Illuminate\Http\Response
     */
    public function edit(Traslado $traslado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Traslado  $traslado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Traslado $traslado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Traslado  $traslado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Traslado $traslado)
    {
        //
    }
}
