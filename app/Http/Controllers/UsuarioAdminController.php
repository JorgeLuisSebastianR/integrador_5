<?php

namespace App\Http\Controllers;

use App\Models\UsuarioAdmin;
use App\Http\Requests\StoreUsuarioAdminRequest;
use App\Http\Requests\UpdateUsuarioAdminRequest;

class UsuarioAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Holas desde usuario admin";
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
     * @param  \App\Http\Requests\StoreUsuarioAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsuarioAdminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UsuarioAdmin  $usuarioAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(UsuarioAdmin $usuarioAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UsuarioAdmin  $usuarioAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(UsuarioAdmin $usuarioAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUsuarioAdminRequest  $request
     * @param  \App\Models\UsuarioAdmin  $usuarioAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsuarioAdminRequest $request, UsuarioAdmin $usuarioAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UsuarioAdmin  $usuarioAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(UsuarioAdmin $usuarioAdmin)
    {
        //
    }
}
