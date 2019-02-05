<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PollingUnit extends Model
{
    protected $guarded = [];

    public function pollingUnitIncidences()
    {
    	return $this->hasMany('App\PollingUnitIncidence');
    }

    public function users()
    {
    	return $this->hasMany('App\User');
    }

    public function result()
    {
    	return $this->hasOne(Result::class);
    }

    public function ward()
    {
    	return $this->belongsTo('App\Ward');
    }
}
