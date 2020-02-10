<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reactivos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reactivos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pregunta')->default(0); //Pregunta
            $table->integer('grado_inicial')->nullable()->unsigned();
            $table->integer('grado_final')->nullable()->unsigned();
            $table->string('tipo')->nullable()->comment('I,E,EEVV'); 
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
        Schema::drop('reactivos');
    }
}
