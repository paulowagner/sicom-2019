<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkLog extends Model
{
    protected $fillable = ['id_os','id_user','log'
	];
}
