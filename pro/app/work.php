<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class work extends Model
{
    protected $table='work';
	protected $fillable=['dname','price'];
	protected $primarykey = 'id';
}
