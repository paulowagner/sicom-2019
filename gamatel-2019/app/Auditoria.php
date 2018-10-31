<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auditoria extends Model
{
    protected $fillable = ['log','id_contrato','id_os','id_sa','id_estoque'
   	];
}
