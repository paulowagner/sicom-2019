<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('os', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prioridade');
            $table->string('categoria');
            $table->unsignedInteger('id_contrato');
            $table->foreign('id_contrato')->references('id')->on('contrato');
            $table->unsignedInteger('id_grupo_os');
            $table->foreign('id_grupo_os')->references('id')->on('grupo_tec_os');

            $table->unsignedInteger('id_contato');
            $table->foreign('id_os')->references('id')->on('os');
            $table->unsignedInteger('id_contrato');
            $table->foreign('id_os')->references('id')->on('os');

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
        Schema::dropIfExists('os');
    }
}
