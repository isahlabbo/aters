<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    protected $guarded = [];

    public function pollingUnits()
    {
    	return $this->hasMany(PollingUnit::class);
    }
    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function lga()
    {
    	return $this->belongsTo(Lga::class);
    }
    public function returningResults()
    {
        return $this->hasMany(WardReturningResult::class);
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
        
        foreach ($this->pollingUnits as $pollingUnit) {
            
            $pdp = $pdp + $pollingUnit->presidential()['pdp'];
            $apc = $apc + $pollingUnit->presidential()['apc'];
            $other = $other + $pollingUnit->presidential()['other'];
            $invalid = $pollingUnit->presidential()['invalid'];
            $valid = $pollingUnit->presidential()['valid'];
            $registered = $pollingUnit->presidential()['registered'];
            $acredited = $pollingUnit->presidential()['acredited'];
           
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
        
        foreach ($this->pollingUnits as $pollingUnit) {
            // if($this->hasResult($pollingUnit)){
	            $pdp = $pdp + $pollingUnit->senatorial()['pdp'];
	            $apc = $apc + $pollingUnit->senatorial()['apc'];
	            $other = $other + $pollingUnit->senatorial()['other'];
	            $invalid = $pollingUnit->senatorial()['invalid'];
	            $valid = $pollingUnit->senatorial()['valid'];
	            $registered = $pollingUnit->senatorial()['registered'];
	            $acredited = $pollingUnit->senatorial()['acredited'];
            // }
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
        
        foreach ($this->pollingUnits as $pollingUnit) {
            
            $pdp = $pdp + $pollingUnit->representative()['pdp'];
            $apc = $apc + $pollingUnit->representative()['apc'];
            $other = $other + $pollingUnit->representative()['other'];
            $invalid = $pollingUnit->representative()['invalid'];
            $valid = $pollingUnit->representative()['valid'];
            $registered = $pollingUnit->representative()['registered'];
            $acredited = $pollingUnit->representative()['acredited'];
           
        }
        return [
            'pdp' => $pdp,
            'apc' => $apc,
            'other' => $other,
            'invalid' => $invalid,
            'acredited' => $acredited,
            'registered' => $registered
        ];
    }
}
