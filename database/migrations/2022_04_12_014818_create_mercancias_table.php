<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMercanciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mercancias', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('operacion_id')->nullable();
            $table->foreign('operacion_id')->references('id')->on('operacions');
            //contenedores
            $table->integer('no_contenedor')->nullable();
            $table->string('tipo_contenedor')->nullable();
            $table->string('dimenciones')->nullable();
            $table->date('fecha_descargo')->nullable();
            //carga suelta
            $table->string('descripcion')->nullable();
            $table->double('cantidad')->nullable();

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
        Schema::dropIfExists('mercancias');
    }
}
