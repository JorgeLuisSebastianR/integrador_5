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
        Schema::create('materials', function (Blueprint $table) {
            //id falta colocar nombre "idMaterial"
            $table->id();
            $table->string('nombre', 30);
            $table->string('fabricante', 30);
            $table->string('descripcion', 30)->unique();
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
        Schema::dropIfExists('materials');
    }
};
