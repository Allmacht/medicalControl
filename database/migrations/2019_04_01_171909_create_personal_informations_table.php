<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_informations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code_id');
            $table->string('nombres');
            $table->string('apellido_paterno');
            $table->string('apellido_materno')->nullable();
            $table->date('fecha_nacimiento');
            $table->string('estado');
            $table->string('municipio');
            $table->string('colonia')->nullable();
            $table->string('calle');
            $table->string('numero_exterior')->nullable();
            $table->string('numero_interior')->nullable();
            $table->string('codigo_postal');
            $table->string('telefono_local')->nullable();
            $table->string('telefono_celular');
            $table->string('rfc');
            $table->string('curp');
            $table->string('seguro_social')->nullable();
            $table->string('email')->nullable();
            $table->string('cedula_profesional')->nullable();
            $table->string('contacto');
            $table->string('telefono_contacto');
            $table->unsignedBigInteger('building_id');
            $table->foreign('building_id')->references('id')->on('buildings');
            $table->string('medicamento')->nullable();
            $table->date('fecha_ingreso');
            $table->float('salario')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('position_id')->nullable();
            $table->foreign('position_id')->references('id')->on('positions');
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('personal_informations');
    }
}
