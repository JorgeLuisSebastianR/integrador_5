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
        Schema::create('jefe_departamentos', function (Blueprint $table) {
            //id con nombre
            $table->id();
            //llave foranea
            /*$table->unsignedBigInteger('idEmpleado');
               $table->foreign('idEmpleado')->references('id')->on('Empleado');*/
            $table->string('nombreUsuario', 30)->unique();
            $table->string('contra', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jefe_departamentos');
    }
};
