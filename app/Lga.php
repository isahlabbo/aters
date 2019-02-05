<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{
	protected $guarded = [];

    public function wards()
    {
    	return $this->hasMany('App\Ward');
    }
    
    public function user()
    {
    	return $this->hasOne(User::class);
    }
}
