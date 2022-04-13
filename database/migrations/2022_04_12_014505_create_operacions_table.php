<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operacions', function (Blueprint $table) {
            $table->id();

            $table->integer('folio')->nullable();
            $table->integer('pedimento')->nullable();
            $table->string('cliente')->nullable();
            $table->string('aduana')->nullable();
            $table->string('patente')->nullable();
            $table->integer('t_mercancia')->nullable();
            $table->integer('t_operacion')->nullable();
            $table->string('estatus')->nullable();

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
        Schema::dropIfExists('operacions');
    }
}
