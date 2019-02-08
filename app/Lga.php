<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Services\Summary as ElectionResultSummary;
class Lga extends Model
{
    use ElectionResultSummary;
    
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
