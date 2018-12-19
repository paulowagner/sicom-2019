<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstoquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estoques', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->string('codigoNCM')->nullable();
            $table->string('codigoFornecedor')->nullable();
            $table->string('codigoSAP')->nullable();
            $table->string('uni');// PC - MTS
            $table->integer('ativo')->nullable();
            $table->integer('aprovado')->default(0);
            $table->float('valor', 8, 2);
            $table->float('vitoria_estoqueInterno',8,3);
            $table->float('vitoria_estoque',8,3);
            $table->float('vitoria_minimo',8,3);
            $table->float('vitoria_ideal',8,3);
            $table->float('SamarcoUbuEstoqueInterno',8,3);
            $table->float('SamarcoUbuEstoque',8,3);
            $table->float('SamarcoUbuMinimo',8,3);
            $table->float('SamarcoUbuIdeal',8,3);
            $table->float('SamarcoGermanoEstoqueInterno',8,3);
            $table->float('SamarcoGermanoEstoque',8,3);
            $table->float('SamarcoGermanoMinimo',8,3);
            $table->float('SamarcoGermanoIdeal',8,3);
            $table->float('fibriaAracruzEstoqueInterno',8,3);
            $table->float('fibriaAracruzEstoque',8,3);
            $table->float('fibriaAracruzMinimo',8,3);
            $table->float('fibriaAracruzIdeal',8,3);
            $table->float('fibriaPostoDaMataEstoqueInterno',8,3);
            $table->float('fibriaPostoDaMataEstoque',8,3);
            $table->float('fibriaPostoDaMataMinimo',8,3);
            $table->float('fibriaPostoDaMataIdeal',8,3);
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
        Schema::dropIfExists('estoques');
    }
}
