<?php
namespace App\Services\PollingUnit\DangeShuni;

/**
* this class binji ward array and create their polling unit
*/
class DangeShuniPollingUnits
{
	
	function __construct()
	{
		$this->pollingUnits = $this->getPollingUnits();
	}

	protected function getPollingUnits()
	{
        return [
        	['name'=>'Bodai','pollingUnits'=> new Bodai],
        	['name'=>'Dange','pollingUnits'=> new Dange],
        	['name'=>'Fajaldu','pollingUnits'=> new Fajaldu],
        	['name'=>'Giere','pollingUnits'=> new Giere],
        	['name'=>'Rikina','pollingUnits'=> new Rikina],
        	['name'=>'Rudu','pollingUnits'=> new Rudu],
        	['name'=>'Ruggar Gidado','pollingUnits'=> new RuggarGidado],
        	['name'=>'Shuni','pollingUnits'=> new Shuni],
        	['name'=>'Tsafanade','pollingUnits'=> new Tsafanade],
        	['name'=>'Tuntube','pollingUnits'=> new Tuntube],
        	['name'=>'Wababe','pollingUnits'=> new Wababe],
        ];
	}


}