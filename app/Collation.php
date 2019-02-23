<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collation extends Model
{
	protected $guarded = [];

    public function results()
    {
    	return $this->hasMany(Result::class);
    }

    public function resultCount()
    {
    	return $this->hasOne(ResultCount::class);
    }
}
