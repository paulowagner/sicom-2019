<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSAMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sa_materiais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prazo');//urgente - pouco urgente - normal
            $table->string('insp');
            $table->float('quant',8,3);
            $table->float('quant_entregue',8,3);
            $table->unsignedInteger('aplicacao');
            $table->unsignedInteger('aprovado');
            $table->unsignedInteger('fechamento');
            $table->unsignedInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users');
            $table->unsignedInteger('id_item');
            $table->foreign('id_item')->references('id')->on('estoques');
            $table->unsignedInteger('id_sa');
            $table->foreign('id_sa')->references('id')->on('sas');
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
        Schema::dropIfExists('sa_materiais');
    }
}
