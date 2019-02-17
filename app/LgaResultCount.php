<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LgaResultCount extends Model
{
    protected $guarded = [];
    
    function lga()
    {
    	return $this->belongsTo(Lga::class);
    }
}
