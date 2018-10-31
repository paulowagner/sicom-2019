<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OS extends Model
{
    protected $fillable = ['prioridade','categoria','centroCusto','chamadoEXT','status','motivoStatus','modelo','id_nserieId','id_contrato','id_contato'
	];
}
