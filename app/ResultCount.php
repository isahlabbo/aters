<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultCount extends Model
{
	protected $guarded = [];
	
    public function collation()
    {
    	return $this->belongsTo(Collation::class);
    }
}
