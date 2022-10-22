<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('razonSocial', 100);
            $table->string('alias', 50)->unique();
            $table->string('RFC', 15)->unique();
            $table->string('calle', 50);
            $table->string('colonia', 50)->unique();
            $table->string('numeroExterior', 10);
            $table->string('numeroInterior', 20)->unique();
            $table->string('codigoPostal', 11);
            $table->string('ciudad', 100);
            $table->string('estado', 100);
            $table->string('telefono', 15)->unique();
            $table->string('correoElectronico', 50)->unique();
            $table->string('direccionEnvioAlternativa', 300)->unique();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};
