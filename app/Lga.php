<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Services\Summary as ElectionResultSummary;

class Lga extends Model
{
   use ElectionResultSummary;
    
	protected $fillable = ['name'];

    public function wards()
    {
    	return $this->hasMany('App\Ward');
    }
    
    public function user()
    {
    	return $this->hasOne(User::class);
    }
    
    public function availableResult()
    {
        $counter = 0;
        foreach ($this->wards as $ward) {
            foreach ($ward->pollingUnits as $pollingUnit) {
                foreach ($pollingUnit->results as $result) {
                    $flag = true;
                    if($result->apc == 0){
                        $flag = false;
                    }
                }
                if($flag == true){
                    $counter ++;
                }
            }
        }
        return $counter;
    }

    

    
}
