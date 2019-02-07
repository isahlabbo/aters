<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $guarded = [];
    
    public function results()
    {
    	return $this->hasMany(Result::class);
    }
}
