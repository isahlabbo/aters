<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $guarded = [];

    public function pollingUnit()
    {
    	return $this->belongsTo(PollingUnit::class);
    }

    public function type()
    {
    	return $this->belongsTo(Type::class);
    }

    public function collation()
    {
    	return $this->belongsTo(Collation::class);
    }
}
