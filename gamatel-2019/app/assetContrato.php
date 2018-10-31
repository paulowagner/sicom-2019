<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class assetContrato extends Model
{
    //
	protected $fillable = ['id_asset','id_contrato','inicio','fim','statusEntrega'
   	];
}
