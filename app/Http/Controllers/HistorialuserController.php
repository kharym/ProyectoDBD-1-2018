<?php

namespace App\Http\Controllers;

use App\Historialuser;
use Illuminate\Http\Request;

class HistorialuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historialuser = Historialuser::all();
        return $historialuser;
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
        $historialuser = new Historialuser();
        $historialuser->descripcion= $request->descripcion;
        $historialuser->fechaHistorial= $request->fechaHistorial;
        $historialuser->horaHistorial= $request->horaHistorial;
       
        $historialuser->save();

        $todos = Historialuser::all();
        return $todos;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Historialuser  $historialuser
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $historialuser = Historialuser::find($id);
        return $historialuser;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Historialuser  $historialuser
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
     * @param  \App\Historialuser  $historialuser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $historialuser = Historialuser::find($id);
        $historialuser->descripcion= $request->descripcion;
        $historialuser->fechaHistorial= $request->fechaHistorial;
        $historialuser->horaHistorial= $request->horaHistorial;
       
        $historialuser->save();

        return $historialuser;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Historialuser  $historialuser
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $historialuser = Historialuser::find($id);
        $historialuser->delete();

        return Historialuser:: all();
    }
}
