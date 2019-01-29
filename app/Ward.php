<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    protected $guarded = [];

    public function pollingUnits()
    {
    	return $this->hasMany(PollingUnit::class);
    }

    public function lga()
    {
    	return $this->belongsTo(Lga::class);
    }

}
