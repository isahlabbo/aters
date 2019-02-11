<?php
namespace App\Services\PollingUnit\Kware;

/**
* this class binji ward array and create their polling unit
*/
class KwarePollingUnits
{
	
	function __construct()
	{
		$this->pollingUnits = $this->getPollingUnits();
	}

	protected function getPollingUnits()
	{
        return [
        	['name'=>'Ali/Marabawa','pollingUnits'=> new Ali_Marabawa],
        	['name'=>'Bankanu','pollingUnits'=> new Bankanu],
        	['name'=>'Basansan','pollingUnits'=> new Basansan],
        	['name'=>'Durbawa','pollingUnits'=> new Durbawa],
        	['name'=>'G/Modibbo','pollingUnits'=> new G_Modibbo],
        	['name'=>'G/Rugga','pollingUnits'=> new G_Rugga],
        	['name'=>'Kabanga','pollingUnits'=> new Kabanga],
        	['name'=>'Kware','pollingUnits'=> new Kware],
        	['name'=>'S/Birni','pollingUnits'=> new S_Birni],
        	['name'=>'Tsaki/Walake/E','pollingUnits'=> new Tsaki_Walake_E],
        	['name'=>'Tunga/Mallamawa','pollingUnits'=> new Tunga_Mallamawa],
        ];
	}


}