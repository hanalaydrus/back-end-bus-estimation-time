<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $table = 'bus';

    public $incrementing = false;

    protected $guarded = [];

    public function positions()
    {
    	return $this->hasMany(Position::class);
    }
}
