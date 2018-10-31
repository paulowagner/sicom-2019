<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaterialOS extends Model
{
    protected $fillable = ['valor','quant','faturado','id_os','id_item'
	];
}
