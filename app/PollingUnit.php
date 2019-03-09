<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PollingUnit extends Model
{
    protected $guarded = [];

    public function pollingUnitIncidences()
    {
    	return $this->hasMany(PollingUnitIncidence::class);
    }

    public function user()
    {
    	return $this->hasOne(User::class);
    }

    public function results()
    {
    	return $this->hasMany(Result::class);
    }

    public function ward()
    {
    	return $this->belongsTo(Ward::class);
    }

    

    public function submitted()
    {
        $flag = true;
        foreach($this->results as $result){
            if($result->apc == 0){
                $flag = false; 
            }
        }
        return $flag;
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
        
        foreach ($this->results as $result) {
            if($result->type_id == 1 && $result->apc != 0){
                $pdp = $pdp + $result->pdp;
                $apc = $apc + $result->apc;
                $other = $other + $result->other;
                $invalid = $result->invalid_vote;
                $valid = $result->valid_vote;
                $registered = $this->registered;
                $acredited = $this->acredited;
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

    public function assembly()
    {
        $pdp = 0;
        $apc = 0;
        $other = 0;
        $invalid = 0;
        $valid = 0;
        $registered = 0;
        $acredited = 0;
        
        foreach ($this->results as $result) {
            if($result->type_id == 2 && $result->apc != 0){
                $pdp = $pdp + $result->pdp;
                $apc = $apc + $result->apc;
                $other = $other + $result->other;
                $invalid = $result->invalid_vote;
                $valid = $result->valid_vote;
                $registered = $this->registered;
                $acredited = $this->acredited;
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
