<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidence extends Model
{
	protected $guarded = [];

    public function pollingUnitIncidences()
    {
    	return $this->hasMany(PollingUnitIncidence::class);
    }

}
