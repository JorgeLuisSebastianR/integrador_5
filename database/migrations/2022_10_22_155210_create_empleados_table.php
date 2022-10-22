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
        Schema::create('empleados', function (Blueprint $table) {
         //me falto poner completo el nombre del id
         $table->id();
         /*  //llaves foraneas
          $table->unsignedBigInteger('idDepartamento');
          $table->foreign('idDepartamento')->references('id')->on('departamento');

          $table->unsignedBigInteger('idPuesto');
          $table->foreign('idPuesto')->references('id')->on('puesto');*/

          //atributos normales
          $table->string('numTrabajador', 10);
          $table->string('nombre', 60);
          $table->string('apellidoPaterno', 50);
          $table->string('apellidoMaterno', 50);
          $table->string('domicilio', 100);
          $table->string('RFC', 11);
          $table->string('CURP', 18);
          $table->string('NSS', 20);
          $table->date('fechaIngreso');
          $table->enum('sexo', ['H', 'M']);
          $table->date('fechaNacimiento');
          $table->enum('estadoSalud', ['Saludable', 'Discapacidad','Enfermedad']);
          $table->string('observaciones', 1000);
          $table->enum('estadoCivil', ['Casado', 'Soltero','Viudo']);
          $table->string('telefonoContacto', 10);
          $table->string('correoElectronico', 50);
          $table->enum('estatus', ['Activo', 'Renuncia','Baja','Despido']);
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
};
