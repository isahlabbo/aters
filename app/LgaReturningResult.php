<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LgaReturningResult extends Model
{
    protected $guarded = [];

    public function lga()
    {
    	return $this->belongsTo(Lga::class);
    }
    public function type()
    {
    	return $this->belongsTo(Type::class);
    }
}
