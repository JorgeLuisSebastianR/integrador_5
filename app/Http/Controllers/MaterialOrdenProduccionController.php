<?php

namespace App\Http\Controllers;

use App\Models\MaterialOrdenProduccion;
use App\Http\Requests\StoreMaterialOrdenProduccionRequest;
use App\Http\Requests\UpdateMaterialOrdenProduccionRequest;

class MaterialOrdenProduccionController extends Controller
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
     * @param  \App\Http\Requests\StoreMaterialOrdenProduccionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMaterialOrdenProduccionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MaterialOrdenProduccion  $materialOrdenProduccion
     * @return \Illuminate\Http\Response
     */
    public function show(MaterialOrdenProduccion $materialOrdenProduccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MaterialOrdenProduccion  $materialOrdenProduccion
     * @return \Illuminate\Http\Response
     */
    public function edit(MaterialOrdenProduccion $materialOrdenProduccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMaterialOrdenProduccionRequest  $request
     * @param  \App\Models\MaterialOrdenProduccion  $materialOrdenProduccion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMaterialOrdenProduccionRequest $request, MaterialOrdenProduccion $materialOrdenProduccion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MaterialOrdenProduccion  $materialOrdenProduccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaterialOrdenProduccion $materialOrdenProduccion)
    {
        //
    }
}
