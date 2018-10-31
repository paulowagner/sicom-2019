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
            $table->string('centroCusto');
            $table->string('chamadoEXT');
            $table->string('status');
            $table->string('motivoStatus');
            $table->string('modelo');

            $table->unsignedInteger('id_nserieId');
            $table->foreign('id_nserieId')->references('id')->on('assets');

            $table->unsignedInteger('id_contrato');
            $table->foreign('id_contrato')->references('id')->on('contratos');

            $table->unsignedInteger('id_contato');
            $table->foreign('id_contato')->references('id')->on('contatos');


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
