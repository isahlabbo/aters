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
 
    public function senatorial()
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

    public function representative()
    {
        $pdp = 0;
        $apc = 0;
        $other = 0;
        $invalid = 0;
        $valid = 0;
        $registered = 0;
        $acredited = 0;
        
        foreach ($this->returningResults as $result) {
            if($result->type_id == 3){
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
}
