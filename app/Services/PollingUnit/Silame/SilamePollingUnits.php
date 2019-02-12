<?php
namespace App\Services\PollingUnit\Silame;

/**
* this class binji ward array and create their polling unit
*/
class SilamePollingUnits
{
	
	function __construct()
	{
		$this->pollingUnits = $this->getPollingUnits();
	}

	protected function getPollingUnits()
	{
        return [
        	
        	['name'=>'Gande East','pollingUnits'=> new GandeEast],
        	['name'=>'Gande West','pollingUnits'=> new GandeWest],
                ['name'=>'Katami North','pollingUnits'=> new KatamiNorth],
        	['name'=>'Katami South','pollingUnits'=> new KatamiSouth],
                ['name'=>'Kubodu North','pollingUnits'=> new KuboduN],
                ['name'=>'Kubodu South','pollingUnits'=> new KuboduS],
        	['name'=>'Labani','pollingUnits'=> new Labani],
        	['name'=>'Marafa East','pollingUnits'=> new MarafaEast],
        	['name'=>'Marafa West','pollingUnits'=> new MarafaWest],
        	['name'=>'Silame','pollingUnits'=> new Silame],
        	
        ];
	}


}