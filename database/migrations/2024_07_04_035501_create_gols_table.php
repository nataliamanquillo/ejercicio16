<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gols', function (Blueprint $table) {
            $table->id();

            $table->integer('minuto');
            $table->integer('desc');

            $table->unsignedBigInteger('jugador_id'); 
            $table->foreign('jugador_id')->references('id')->on('jugadors'); 

            $table->unsignedBigInteger('partido_id'); 
            $table->foreign('partido_id')->references('id')->on('partidos'); 

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
        Schema::dropIfExists('gols');
    }
}
