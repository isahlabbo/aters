<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{
	protected $guarded = [];

    public function wards()
    {
    	$this->hasMany(Ward::class);
    }
    public function pollingUnits()
    {
    	$this->hasMany(PollingUnit::class);
    }
    public function user()
    {
    	$this->hasOne(User::class);
    }
}
