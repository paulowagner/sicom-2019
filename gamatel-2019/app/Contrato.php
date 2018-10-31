<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $fillable = ['inicio','fim','anotacoes','nContrato'
	];
}
