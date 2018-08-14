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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProveedorAuto  $proveedorAuto
     * @return \Illuminate\Http\Response
     */
    public function show(ProveedorAuto $proveedorAuto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProveedorAuto  $proveedorAuto
     * @return \Illuminate\Http\Response
     */
    public function edit(ProveedorAuto $proveedorAuto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProveedorAuto  $proveedorAuto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProveedorAuto $proveedorAuto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProveedorAuto  $proveedorAuto
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProveedorAuto $proveedorAuto)
    {
        //
    }
}
