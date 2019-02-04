<?php
namespace App\Services\PollingUnit\Gwadabawa;

/**
* this class binji ward array and create their polling unit
*/
class GwadabawaPollingUnits
{
	
	function __construct()
	{
		$this->pollingUnits = $this->getPollingUnits();
	}

	protected function getPollingUnits()
	{
        return [
        	['name'=>'AsaraArewa','pollingUnits'=> new AsaraArewa],
        	['name'=>'AsaraKudu','pollingUnits'=> new AsaraKudu],
        	['name'=>'Atakwanyo','pollingUnits'=> new Atakwanyo],
        	['name'=>'Chimmola','pollingUnits'=> new Chimmola],
        	['name'=>'ChimmolaArewa','pollingUnits'=> new ChimmolaArewa],
        	['name'=>'GidanKaya','pollingUnits'=> new GidanKaya],
        	['name'=>'Gigane','pollingUnits'=> new Gigane],
        	['name'=>'Gwadabawa','pollingUnits'=> new Gwadabawa],
        	['name'=>'Huchi','pollingUnits'=> new Huchi],
        	['name'=>'Mammande','pollingUnits'=> new Mammande],
        	['name'=>'Salame','pollingUnits'=> new Salame],
        ];
	}


}