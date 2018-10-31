<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposta extends Model
{
    protected $fillable = ['data','natureza','analiseCritica','nProposta','valor','status','obs','idCliente'
    ];
}
