<?php
namespace App\Services\PollingUnit\Tureta;

/**
* this class binji ward array and create their polling unit
*/
class TuretaPollingUnits
{
	
	function __construct()
	{
		$this->pollingUnits = $this->getPollingUnits();
	}

	protected function getPollingUnits()
	{
        return [
        	
        	['name'=>'Barayar Giwa','pollingUnits'=> new BarayarGiwa],
        	['name'=>'Duma','pollingUnits'=> new Duma],
        	['name'=>'Fura Girke','pollingUnits'=> new FuraGirke],
        	['name'=>'Gidan Kare / Bimasa','pollingUnits'=> new GidanKare_Bimasa],
        	['name'=>'Kuruwa','pollingUnits'=> new Kuruwa],
        	['name'=>'Kwarare','pollingUnits'=> new Kwarare],
        	['name'=>'Lambar Tureta','pollingUnits'=> new LambarTureta],
        	['name'=>'Lofa','pollingUnits'=> new Lofa],
        	['name'=>'Tsamiya','pollingUnits'=> new Tsamiya],
        	['name'=>'Tureta Gari','pollingUnits'=> new TuretaGari],
        	
        ];
	}


}