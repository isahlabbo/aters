<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PollingUnit extends Model
{
    protected $guarded = [];

    public function pollingUnitIncidence()
    {
    	$this->hasMany(PollingUnitIncidence::class);
    }

    public function users()
    {
    	$this->hasMany(User::class);
    }

    public function result()
    {
    	$this->hasOne(Result::class);
    }

    public function ward()
    {
    	$this->belongsTo(Ward::class);
    }
}
