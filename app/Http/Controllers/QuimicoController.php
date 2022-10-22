<?php

namespace App\Http\Controllers;

use App\Models\Quimico;
use App\Http\Requests\StoreQuimicoRequest;
use App\Http\Requests\UpdateQuimicoRequest;

class QuimicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Holas desde quimico";
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
     * @param  \App\Http\Requests\StoreQuimicoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuimicoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quimico  $quimico
     * @return \Illuminate\Http\Response
     */
    public function show(Quimico $quimico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quimico  $quimico
     * @return \Illuminate\Http\Response
     */
    public function edit(Quimico $quimico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuimicoRequest  $request
     * @param  \App\Models\Quimico  $quimico
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuimicoRequest $request, Quimico $quimico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quimico  $quimico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quimico $quimico)
    {
        //
    }
}
