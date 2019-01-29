<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidence extends Model
{
    public function pollingUnitIncidence()
    {
    	$this->hasOne(PollingUnitIncidence::class);
    }

    public function evidence()
    {
    	$this->belongsTo(Evidence::class);
    }
}
