<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $guarded = [];
    
    

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        $this->belongsTo(Role::class);
    }

    public function pollingUnit()
    {
        $this->belongsTo(PollingUnit::class);
    }

    public function lga()
    {
        $this->belongsTo(Lga::class);
    }

    public function ward()
    {
        $this->belongsTo(Ward::class);
    }

}
