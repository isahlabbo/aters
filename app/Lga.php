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
    public function returningResults()
    {
        return $this->hasMany(LgaReturningResult::class);
    }
    public function resultCounts()
    {
    	return $this->hasMany(LgaResultCount::class);
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

    public function presidential()
    {
        $pdp = 0;
        $apc = 0;
        $other = 0;
        $invalid = 0;
        $valid = 0;
        $registered = 0;
        $acredited = 0;
        
        foreach ($this->wards as $ward) {

            $pdp = $pdp + $ward->presidential()['pdp'];
            $apc = $apc + $ward->presidential()['apc'];
            $other = $other + $ward->presidential()['other'];
            $valid = $ward->presidential()['valid'];
            $invalid = $ward->presidential()['invalid'];
            $registered = $ward->presidential()['registered'];
            $acredited = $ward->presidential()['acredited'];
           
        }
        
        return [
            'pdp' => $pdp,
            'apc' => $apc,
            'other' => $other,
            'invalid' => $invalid,
            'valid' => $valid,
            'acredited' => $acredited,
            'registered' => $registered
        ];
    }
 
    public function senatorial()
    {
        $pdp = 0;
        $apc = 0;
        $other = 0;
        $invalid = 0;
        $valid = 0;
        $registered = 0;
        $acredited = 0;
        
        foreach ($this->wards as $ward) {

            $pdp = $pdp + $ward->senatorial()['pdp'];
            $apc = $apc + $ward->senatorial()['apc'];
            $other = $other + $ward->senatorial()['other'];
            $valid = $ward->senatorial()['valid'];
            $invalid = $ward->senatorial()['invalid'];
            $registered = $ward->senatorial()['registered'];
            $acredited = $ward->senatorial()['acredited'];
           
        }
        return [
            'pdp' => $pdp,
            'apc' => $apc,
            'other' => $other,
            'invalid' => $invalid,
            'valid' => $valid,
            'acredited' => $acredited,
            'registered' => $registered
        ];
    }

    public function representative()
    {
        $pdp = 0;
        $apc = 0;
        $other = 0;
        $invalid = 0;
        $valid = 0;
        $registered = 0;
        $acredited = 0;
        
        foreach ($this->wards as $ward) {

            $pdp = $pdp + $ward->representative()['pdp'];
            $apc = $apc + $ward->representative()['apc'];
            $other = $other + $ward->representative()['other'];
            $valid = $ward->representative()['valid'];
            $invalid = $ward->representative()['invalid'];
            $registered = $ward->representative()['registered'];
            $acredited = $ward->representative()['acredited'];
           
        }
        return [
            'pdp' => $pdp,
            'apc' => $apc,
            'other' => $other,
            'invalid' => $invalid,
            'valid' => $valid,
            'acredited' => $acredited,
            'registered' => $registered
        ];
    }

    

    
}
