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

    public function assembly()
    {
        $pdp = 0;
        $apc = 0;
        $other = 0;
        $invalid = 0;
        $valid = 0;
        $registered = 0;
        $acredited = 0;
        
        foreach ($this->resultCounts as $result) {
            if($result->type_id == 2) {
                $pdp = $pdp + $result['pdp'];
                $apc = $apc + $result['apc'];
                $other = $other + $result['other'];
                $valid = $result['valid'];
                $invalid = $result['invalid'];
                $registered = $result['registered'];
                $acredited = $result['acredited'];

            }
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
 
    public function returnAssembly()
    {
        $pdp = 0;
        $apc = 0;
        $other = 0;
        $invalid = 0;
        $valid = 0;
        $registered = 0;
        $acredited = 0;
        
        foreach ($this->wards as $ward) {
            $result = $ward->returnAssembly();
            $pdp = $pdp + $result['pdp'];
            $apc = $apc + $result['apc'];
            $other = $other + $result['other'];
            $valid = $result['valid'];
            $invalid = $result['invalid'];
            $registered = $result['registered'];
            $acredited = $result['acredited'];
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


    public function governor()
    {
        $pdp = 0;
        $apc = 0;
        $other = 0;
        $invalid = 0;
        $valid = 0;
        $registered = 0;
        $acredited = 0;
        
        foreach ($this->resultCounts as $result) {
            if($result->type_id == 2) {
                $pdp = $pdp + $result['pdp'];
                $apc = $apc + $result['apc'];
                $other = $other + $result['other'];
                $valid = $result['valid'];
                $invalid = $result['invalid'];
                $registered = $result['registered'];
                $acredited = $result['acredited'];
            }
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
 
    public function returnGovernor()
    {
        $pdp = 0;
        $apc = 0;
        $other = 0;
        $invalid = 0;
        $valid = 0;
        $registered = 0;
        $acredited = 0;
        
        foreach ($this->wards as $ward) {
            $result = $ward->returnGovernor();
            $pdp = $pdp + $result['pdp'];
            $apc = $apc + $result['apc'];
            $other = $other + $result['other'];
            $valid = $result['valid'];
            $invalid = $result['invalid'];
            $registered = $result['registered'];
            $acredited = $result['acredited'];
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
