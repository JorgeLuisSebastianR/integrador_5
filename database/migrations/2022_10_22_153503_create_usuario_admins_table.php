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
        Schema::create('usuario_admins', function (Blueprint $table) {
           //id falta colocar nombre "idAdmin"
           $table->id();
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
        Schema::dropIfExists('usuario_admins');
    }
};
