<?php

namespace App\Http\Controllers;

use App\Models\OrdenProduccion;
use App\Http\Requests\StoreOrdenProduccionRequest;
use App\Http\Requests\UpdateOrdenProduccionRequest;

class OrdenProduccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreOrdenProduccionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrdenProduccionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrdenProduccion  $ordenProduccion
     * @return \Illuminate\Http\Response
     */
    public function show(OrdenProduccion $ordenProduccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrdenProduccion  $ordenProduccion
     * @return \Illuminate\Http\Response
     */
    public function edit(OrdenProduccion $ordenProduccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrdenProduccionRequest  $request
     * @param  \App\Models\OrdenProduccion  $ordenProduccion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrdenProduccionRequest $request, OrdenProduccion $ordenProduccion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrdenProduccion  $ordenProduccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrdenProduccion $ordenProduccion)
    {
        //
    }
}
