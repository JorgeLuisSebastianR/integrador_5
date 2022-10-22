<?php

namespace App\Http\Controllers;

use App\Models\UsuarioAdmin;
use App\Http\Requests\StoreUsuarioAdminRequest;
use App\Http\Requests\UpdateUsuarioAdminRequest;

class UsuarioAdminController extends Controller
{
    public function index()
    {
        return "Holas desde usuario admin";
    }

    public function create()
    {
        //
    }

    public function store(StoreUsuarioAdminRequest $request)
    {
        //
    }

 
    public function show(UsuarioAdmin $usuarioAdmin)
    {
        //
    }


    public function edit(UsuarioAdmin $usuarioAdmin)
    {
        //
    }

   
    public function update(UpdateUsuarioAdminRequest $request, UsuarioAdmin $usuarioAdmin)
    {
        //
    }

 
    public function destroy(UsuarioAdmin $usuarioAdmin)
    {
        //
    }
}
