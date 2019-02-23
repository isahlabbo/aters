<?php
namespace App\Services\PollingUnit\Gada;

/**
* this class binji ward array and create their polling unit
*/
class GadaPollingUnits
{
	
	function __construct()
	{
		$this->pollingUnits = $this->getPollingUnits();
	}

	protected function getPollingUnits()
	{
        return [
        	['name'=>'Dukamaje','pollingUnits'=> new Dukamaje],
        	['name'=>'Gada','pollingUnits'=> new Gada],
        	['name'=>'Gilbadi','pollingUnits'=> new Gilbadi],
        	['name'=>'KadadinBuda','pollingUnits'=> new KadadinBuda],
        	['name'=>'Kadassaka','pollingUnits'=> new Kadassaka],
        	['name'=>'Kaddi','pollingUnits'=> new Kaddi],
        	['name'=>'Kaffe','pollingUnits'=> new Kaffe],
        	['name'=>'Kiri','pollingUnits'=> new Kiri],
        	['name'=>'Kwarma','pollingUnits'=> new Kwarma],
        	['name'=>'Kyadawa','pollingUnits'=> new Kyadawa],
        	['name'=>'Tsitse','pollingUnits'=> new Tsitse],

        	
        ];
	}


}