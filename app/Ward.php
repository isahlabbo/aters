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
    public function resultCounts()
    {
        return $this->hasMany(WardResultCount::class);
    }
    public function returningResults()
    {
        return $this->hasMany(WardReturningResult::class);
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
        
        foreach ($this->returningResults as $result) {
            if($result->type_id == 1){
                $pdp = $pdp + $result->pdp;
                $apc = $apc + $result->apc;
                $other = $other + $result->other;
                $invalid = $invalid + $result->invalid;
                $registered = $registered + $result->registered;
                $acredited = $acredited + $result->acredited;
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
        
        foreach ($this->returningResults as $result) {
            if($result->type_id == 2){
                $pdp = $pdp + $result->pdp;
                $apc = $apc + $result->apc;
                $other = $other + $result->other;
                $invalid = $invalid + $result->invalid;
                $registered = $registered + $result->registered;
                $acredited = $acredited + $result->acredited;
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

    public function governor()
    {
        $pdp = 0;
        $apc = 0;
        $other = 0;
        $invalid = 0;
        $valid = 0;
        $registered = 0;
        $acredited = 0;
        
        foreach ($this->pollingUnits as $pollingUnit) {
            $result = $pollingUnit->governor();
            $pdp = $pdp + $result['pdp'];
            $apc = $apc + $result['apc'];
            $other = $other + $result['other'];
            $invalid = $invalid + $result['invalid'];
            $registered = $registered + $result['registered'];
            $acredited = $acredited + $result['acredited'];
            
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
 
    public function assembly()
    {
        $pdp = 0;
        $apc = 0;
        $other = 0;
        $invalid = 0;
        $valid = 0;
        $registered = 0;
        $acredited = 0;
        
        foreach ($this->pollingUnits as $pollingUnit) {
            $result = $pollingUnit->assembly();
            $pdp = $pdp + $result['pdp'];
            $apc = $apc + $result['apc'];
            $other = $other + $result['other'];
            $invalid = $invalid + $result['invalid'];
            $registered = $registered + $result['registered'];
            $acredited = $acredited + $result['acredited'];
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
