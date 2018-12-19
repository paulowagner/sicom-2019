<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    protected $fillable = ['descricao',
        'codigoNCM','codigoFornecedor','codigoSAP','ativo','valor','vitoria_estoqueInterno','vitoria_estoque','vitoria_minimo','vitoria_ideal','SamarcoUbuEstoqueInterno','SamarcoUbuEstoque','SamarcoUbuMinimo','SamarcoUbuIdeal','SamarcoGermanoEstoqueInterno','SamarcoGermanoEstoque','SamarcoGermanoMinimo','SamarcoGermanoIdeal','fibriaAracruzEstoqueInterno','fibriaAracruzEstoque','fibriaAracruzMinimo','fibriaAracruzIdeal','fibriaPostoDaMataEstoqueInterno','fibriaPostoDaMataEstoque','fibriaPostoDaMataMinimo','fibriaPostoDaMataIdeal','aprovado','uni'
        ];

}
