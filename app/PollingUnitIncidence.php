<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PollingUnitIncidence extends Model
{
    protected $guarded = [];

    public function pollingUnit()
    {
    	$this->belongsTo(PollingUnit::class);
    }

    public function incidence()
    {
    	$this->belongsTo(Incidence::class);
    }
}
