<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evidence extends Model
{
    public function incidence()
    {
    	$this->hasOne(Incidence::class);
    }
}
