<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auditorias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('log');
            $table->unsignedInteger('id_contrato');
            $table->foreign('id_contrato')->references('id')->on('contratos');
            $table->unsignedInteger('id_os');
            $table->foreign('id_os')->references('id')->on('os');
            $table->unsignedInteger('id_sa');
            $table->foreign('id_sa')->references('id')->on('sas');
            $table->unsignedInteger('id_estoque');
            $table->foreign('id_estoque')->references('id')->on('estoques');
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
        Schema::dropIfExists('auditorias');
    }
}
