<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SAMaterial extends Model
{
    protected $fillable = ['prazo','uni','insp','quant','quant_entregue','aplicacao','aprovado','fechamento','id_item','id_sa'
	];
}
