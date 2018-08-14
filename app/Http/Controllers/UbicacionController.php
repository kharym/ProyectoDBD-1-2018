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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ubicacione  $ubicacione
     * @return \Illuminate\Http\Response
     */
    public function show(Ubicacione $ubicacione)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ubicacione  $ubicacione
     * @return \Illuminate\Http\Response
     */
    public function edit(Ubicacione $ubicacione)
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
    public function update(Request $request, Ubicacione $ubicacione)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ubicacione  $ubicacione
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ubicacione $ubicacione)
    {
        //
    }
}
