<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class PollingUnitIncidence extends Model
{
    protected $guarded = [];

    public function pollingUnit()
    {
    	return $this->belongsTo(PollingUnit::class);
    }

    public function incidence()
    {
    	return $this->belongsTo(Incidence::class);
    }
    public function status()
    {
        if($this->resolve == 1){
            return 'Resolve';
        }else{
            return 'Un Resolve';
        }
    }
    public function duration()
    {
    return Carbon::create(date('Y',strtotime($this->created_at)), date('m',strtotime($this->created_at)), date('d',strtotime($this->created_at)), date('h',strtotime($this->created_at)), date('m',strtotime($this->created_at)), date('s',strtotime($this->created_at)))->diffForHumans();
    }
}
