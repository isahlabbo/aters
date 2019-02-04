<?php
namespace App\Services\PollingUnit\Rabah;

/**
* this class binji ward array and create their polling unit
*/
class RabahPollingUnits
{
	
	function __construct()
	{
		$this->pollingUnits = $this->getPollingUnits();
	}

	protected function getPollingUnits()
	{
        return [
        	['name'=>'Gandi A','pollingUnits'=> new Gandi_A],
        	['name'=>'Gandi B','pollingUnits'=> new Gandi_B],
        	['name'=>'Gawakuke','pollingUnits'=> new Gawakuke],
        	['name'=>'Gwaddodi Gidan Buwai','pollingUnits'=> new Gwaddodi_GidanBuWai],
        	['name'=>'Kurya','pollingUnits'=> new Kurya],
        	['name'=>'Rabah','pollingUnits'=> new Rabah],
        	['name'=>'Rara','pollingUnits'=> new Rara],
        	['name'=>'Riji Maikujera','pollingUnits'=> new Riji_Maikujera],
        	['name'=>'Tsamiya','pollingUnits'=> new Tsamiya],
        	['name'=>'Tursa','pollingUnits'=> new Tursa],
        	['name'=>'Yar Tsakuwa','pollingUnits'=> new YarTsakuwa],
        ];
	}


}