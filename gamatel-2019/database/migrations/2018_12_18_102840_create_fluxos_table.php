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
            $table->string('tipo');//SA OS Item-SA 
            $table->unsignedInteger('id_fluxo');//id_sa id_os id_itemSa
            $table->string('fluxo');//Descrição do fluxo
            $table->unsignedInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users');
            $table->unsignedInteger('finalizado')->nullable();
            $table->unsignedInteger('ativo')->nullable();
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
