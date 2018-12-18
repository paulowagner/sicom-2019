<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFluxosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fluxos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->string('fluxo');
            $table->unsignedInteger('id_fluxo');
            $table->unsignedInteger('finalizado');
            $table->unsignedInteger('ativo');
            $table->timestamps('data');
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
        Schema::dropIfExists('fluxos');
    }
}
