<?php

namespace App\Http\Controllers;

use App\ProveedorAuto;
use Illuminate\Http\Request;

class ProveedorAutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedorAuto = ProveedorAuto::all();
        return $proveedorAuto;
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
        $proveedorAuto = new ProveedorAuto();
        $proveedorAuto->nombreProveedorAuto= $request->nombreProveedorAuto;
        $proveedorAuto->telefono= $request->telefono;
        $proveedorAuto->correo= $request->correo;
       
        $proveedorAuto->save();

        $todos = ProveedorAuto::all();
        return $todos;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProveedorAuto  $proveedorAuto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proveedorAuto = ProveedorAuto::find($id);
        return $proveedorAuto;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProveedorAuto  $proveedorAuto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProveedorAuto  $proveedorAuto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $proveedorAuto = ProveedorAuto::find($id);
        $proveedorAuto->nombreProveedorAuto= $request->nombreProveedorAuto;
        $proveedorAuto->telefono= $request->telefono;
        $proveedorAuto->correo= $request->correo;
       
        $proveedorAuto->save();

        return $proveedorAuto;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProveedorAuto  $proveedorAuto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedorAuto = ProveedorAuto::find($id);
        $proveedorAuto->delete();

        return ProveedorAuto:: all();
    }
}
