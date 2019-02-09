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

    public function registered()
    {
        $registered = 0;
        foreach ($this->wards as $ward) {
            foreach ($ward->pollingUnits as $pollingUnit) {
                $registered = $registered + $pollingUnit->registered;
            }
        }
        return $registered;
    }
    public function acredited()
    {
        $acredited = 0;
        foreach ($this->wards as $ward) {
            foreach ($ward->pollingUnits as $pollingUnit) {
                $acredited = $acredited + $pollingUnit->acredited;
            }
        }
        return $acredited;
    }
}
