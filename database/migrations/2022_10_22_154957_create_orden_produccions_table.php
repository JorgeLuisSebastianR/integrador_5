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
        Schema::create('orden_produccions', function (Blueprint $table) {
            //id falta colocar nombre "idOrdemProduccion"
            $table->id();
            /*  //llaves foraneas 
               $table->unsignedBigInteger('idPlanta');
               $table->foreign('idPlanta')->references('id')->on('Planta');*/

            /*$table->unsignedBigInteger('idCliente');
               $table->foreign('idCliente')->references('id')->on('Cliente');*/

            /*$table->unsignedBigInteger('idColor');
               $table->foreign('idColor')->references('id')->on('Color');*/

            /*$table->unsignedBigInteger('idTratamiento');
               $table->foreign('idTratamiento')->references('id')->on('Tratamiento');*/

            $table->float('cantidad', 10, 5);
            $table->string('descripcion', 20)->unique();
            //tengo dudas con los timestamp
            $table->timestamp('fechaRegistro', $precision = 5);
            $table->date('fechaCaptura');
            $table->date('fechaEntrega');
            $table->string('domicilioEnvio', 200);
            $table->string('comentarios', 150)->unique();
            $table->enum('estado', ['En estado', 'Terminado']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orden_produccions');
    }
};
