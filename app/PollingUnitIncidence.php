<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PollingUnitIncidence extends Model
{
    protected $guarded = [];

    public function pollingUnit()
    {
    	return $this->belongsTo(PollingUnit::class);
    }

    public function incidence()
    {
    	return $this->belongsTo(Incidence::class);
    }
}
