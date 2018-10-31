<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['Cliente','CEP','SegCod','Endereco','Bairro','Cidade','Estado','CNPJ','InsEst'
	];
}
