<?php
namespace App\Services\PollingUnit\Illela;

/**
* this class binji ward array and create their polling unit
*/
class IllelaPollingUnits
{
	
	function __construct()
	{
		$this->pollingUnits = $this->getPollingUnits();
	}

	protected function getPollingUnits()
	{
        return [
        	['name'=>'Araba','pollingUnits'=> new Araba],
        	['name'=>'Damba','pollingUnits'=> new Damba],
        	['name'=>'Darna','pollingUnits'=> new Darna],
        	['name'=>'DarneTsolawo','pollingUnits'=> new DarneTsolawo],
        	['name'=>'GHamma','pollingUnits'=> new GHamma],
        	['name'=>'GKatta','pollingUnits'=> new GKatta],
        	['name'=>'Garu','pollingUnits'=> new Garu],
        	['name'=>'Illela','pollingUnits'=> new Illela],
        	['name'=>'Kalmalo','pollingUnits'=> new Kalmalo],
        	['name'=>'RGati','pollingUnits'=> new RGati],
        	['name'=>'Tozai','pollingUnits'=> new Tozai],
        ];
	}


}