<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code_id');
            $table->string('nombre');
            $table->string('estado');
            $table->string('municipio');
            $table->string('colonia')->nullable();
            $table->string('calle');
            $table->string('numero_externo');
            $table->string('numero_interno')->nullable();
            $table->string('codigo_postal');
            $table->string('telefono');
            $table->string('telefono_secundario')->nullable();
            $table->boolean('status')->default(true);
            $table->UnsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('buildings');
    }
}
