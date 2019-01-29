<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creditation extends Model
{
    public function pollingUnit()
    {
    	$this->belongsTo(PollingUnit::class);
    }
}
