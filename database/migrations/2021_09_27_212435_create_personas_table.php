<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno')->default('');
            $table->string('codigo');
            $table->string('telefono',50)->nullable();
            $table->string('correo')->default('');
            $table->string('archivo_original');
            $table->string('archivo_ruta');
            $table->string('mime',30);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
