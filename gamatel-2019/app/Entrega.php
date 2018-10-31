<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrega extends Model
{
    protected $fillable = ['data','id_contato','id_asset_contrato'
   ];
}
