<?php
namespace App\Services\PollingUnit\Shagari;

/**
* this class binji ward array and create their polling unit
*/
class ShagariPollingUnits
{
	
	function __construct()
	{
		$this->pollingUnits = $this->getPollingUnits();
	}

	protected function getPollingUnits()
	{
        return [
                
        	['name'=>'Dandin Mahe','pollingUnits'=> new DandinMahe],
        	['name'=>'Gangam','pollingUnits'=> new Gangam],
        	['name'=>'Horo Birni','pollingUnits'=> new HoroBirni],
        	['name'=>'Jaredi','pollingUnits'=> new Jaredi],
        	['name'=>'Kajiji','pollingUnits'=> new Kajiji],
        	['name'=>'Kambama','pollingUnits'=> new Kambama],
        	['name'=>'Lambara','pollingUnits'=> new Lambara],
        	['name'=>'Mandera','pollingUnits'=> new Mandera],
        	['name'=>'Sanyinnawal','pollingUnits'=> new Sanyinnawal],
        	['name'=>'Shagari','pollingUnits'=> new Shagari],
        	
        ];
	}


}