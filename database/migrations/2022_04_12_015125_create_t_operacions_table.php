<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTOperacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_operacions', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('operacion_id')->nullable();
            $table->foreign('operacion_id')->references('id')->on('operacions');

            $table->date('fecha');
            $table->string('pais');

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
        Schema::dropIfExists('t_operacions');
    }
}
