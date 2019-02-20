<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WardReturningResult extends Model
{
    protected $guarded = [];

    public function ward()
    {
    	return $this->belongsTo(Ward::class);
    }
    public function type()
    {
    	return $this->belongsTo(Type::class);
    }
}
