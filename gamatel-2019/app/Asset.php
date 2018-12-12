<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
   	protected $fillable = ['nserieId','id_modelo','compradoEm','status'
   	];
}
