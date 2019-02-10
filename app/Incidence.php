<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidence extends Model
{
	protected $guarded = [];
	
    public function pollingUnitIncidence()
    {
    	return $this->BelongsTo('App\PollingUnitIncidence');
    }

    public function evidence()
    {
    	return $this->hasOne('App\Evidence');
    }
}
