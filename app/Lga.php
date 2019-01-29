<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{
    public function wards()
    {
    	$this->hasMany(Ward::class);
    }
}
