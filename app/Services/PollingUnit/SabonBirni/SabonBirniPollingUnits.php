<?php
namespace App\Services\PollingUnit\SabonBirni;

/**
* this class binji ward array and create their polling unit
*/
class SabonBirniPollingUnits
{
	
	function __construct()
	{
		$this->pollingUnits = $this->getPollingUnits();
	}

	protected function getPollingUnits()
	{
        return [
        	['name'=>'Gangara','pollingUnits'=> new Gangara],
        	['name'=>'Kalgo','pollingUnits'=> new Kalgo],
        	['name'=>'Kurawa','pollingUnits'=> new Kurawa],
        	['name'=>'Lajinge','pollingUnits'=> new Lajinge],
        	['name'=>'Makuwana','pollingUnits'=> new Makuwana],
        	['name'=>'S/Birni East','pollingUnits'=> new S_BirniEast],
        	['name'=>'S/Birni West','pollingUnits'=> new S_BirniWest],
        	['name'=>'Gatawa','pollingUnits'=> new Tagawa],
        	['name'=>'Tara','pollingUnits'=> new Tara],
        	['name'=>'Tsamaye','pollingUnits'=> new Tsamaye],
        	['name'=>'Unguwar Lalle','pollingUnits'=> new UnguwarLalle],
        ];
	}


}