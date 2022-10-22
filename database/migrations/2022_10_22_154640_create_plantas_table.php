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
        Schema::create('plantas', function (Blueprint $table) {
          //me falto poner completo el nombre del idPlantas
          $table->id();



              
          /*  //llaves foraneas #NO SÉ QUE ONDA CON EL ADMIN#
           $table->unsignedBigInteger('idAdmin');
           $table->foreign('idAdmin')->references('id')->on('Admin');*/




           //atributos normales
           $table->string('planta', 50);
           $table->string('alias', 60)->unique();
           $table->string('telefono', 10);
           $table->string('domicilio', 200);
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plantas');
    }
};
