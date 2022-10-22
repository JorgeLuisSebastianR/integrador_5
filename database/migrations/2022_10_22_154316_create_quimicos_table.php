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
        Schema::create('quimicos', function (Blueprint $table) {
              //id falta colocar nombre "idQuimico"
              $table->id();
              $table->string('nombre', 30);
              $table->string('fabricante', 50);
              $table->string('descripcion', 150)->unique();
              $table->float('cantidadDisponible', 10, 5);
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quimicos');
    }
};
