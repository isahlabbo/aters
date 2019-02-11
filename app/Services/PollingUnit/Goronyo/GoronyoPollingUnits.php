<?php
namespace App\Services\PollingUnit\Goronyo;

/**
* this class binji ward array and create their polling unit
*/
class GoronyoPollingUnits
{
	
	function __construct()
	{
		$this->pollingUnits = $this->getPollingUnits();
	}

	protected function getPollingUnits()
	{
                return [
                	['name'=>'Birjingo','pollingUnits'=> new Birjingo],
                	['name'=>'Boyeka','pollingUnits'=> new Boyeka],
                	['name'=>'Dantasakko','pollingUnits'=> new DanTasakko],
                	['name'=>'Giyawa','pollingUnits'=> new Giyawa],
                	['name'=>'Goronyo','pollingUnits'=> new Goronyo],
                	['name'=>'Karaga','pollingUnits'=> new Kagara],
                	['name'=>'Kojiyo','pollingUnits'=> new Kojiyo],
                	['name'=>'Kwakwazo','pollingUnits'=> new Kwakwazo],
                	['name'=>'Rimawa','pollingUnits'=> new Rimawa],
                	['name'=>'Shinaka','pollingUnits'=> new Shinaka],
                	['name'=>'Takakume','pollingUnits'=> new Takakume],
                ];
	}


}