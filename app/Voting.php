<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voting extends Model
{
    protected $guarded = [];
    
    public function pollingUnit()
    {
    	$this->belongsTo(PollingUnit::class);
    }
}
