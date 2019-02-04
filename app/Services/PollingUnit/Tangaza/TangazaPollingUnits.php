<?php
namespace App\Services\PollingUnit\Tangaza;

/**
* this class binji ward array and create their polling unit
*/
class TangazaPollingUnits
{
	
	function __construct()
	{
		$this->pollingUnits = $this->getPollingUnits();
	}

	protected function getPollingUnits()
	{
        return [
        	
        	['name'=>'Gidan Madi','pollingUnits'=> new GidanMadi],
        	['name'=>'Kalanjeni','pollingUnits'=> new Kalanjeni],
        	['name'=>'Kwacce Huru','pollingUnits'=> new KwacceHuru],
        	['name'=>'Magonho','pollingUnits'=> new Magonho],
        	['name'=>'Raka','pollingUnits'=> new Raka],
        	['name'=>'Ruwa Wuri','pollingUnits'=> new RuwaWuri],
        	['name'=>'Sakkwai','pollingUnits'=> new Sakkwai],
        	['name'=>'Salewa','pollingUnits'=> new Salewa],
        	['name'=>'Sutti','pollingUnits'=> new Sutti],
        	['name'=>'Tangaza','pollingUnits'=> new Tangaza],
        	
        ];
	}


}