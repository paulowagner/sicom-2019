<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialOSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_os', function (Blueprint $table) {
            $table->increments('id');
            $table->float('valor', 8, 2);
            $table->float('quant',8,3);
            $table->float('faturado',8,3);
            $table->unsignedInteger('id_os');
            $table->foreign('id_os')->references('id')->on('os');
            $table->unsignedInteger('id_item');
            $table->foreign('id_item')->references('id')->on('Estoque');
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
        Schema::dropIfExists('material_os');
    }
}
