<?php
namespace App\Services\PollingUnit\SokotoNorth;

/**
* this class binji ward array and create their polling unit
*/
class SokotoNorthPollingUnits
{
	
	function __construct()
	{
		$this->pollingUnits = $this->getPollingUnits();
	}

	protected function getPollingUnits()
	{
        return [
        	
        	['name'=>'Magajin Gari A','pollingUnits'=> new MagajinGariA],
                ['name'=>'Magajin Gari B','pollingUnits'=> new MagajinGariB],
                ['name'=>'Magajin Rafi A','pollingUnits'=> new MagajinRafiA],
        	['name'=>'Magajin Rafi B','pollingUnits'=> new MagajinRafiB],
        	['name'=>'S/Adar/G/Igwai','pollingUnits'=> new S_Adar_G_Igwai],
        	['name'=>'S/Adar/Gandu','pollingUnits'=> new S_Adar_Gandu],
        	['name'=>'S/Musulmi A','pollingUnits'=> new S_MusulmiA],
        	['name'=>'S/Musulmi B','pollingUnits'=> new S_MusulmiB],
        	['name'=>'Waziri A','pollingUnits'=> new WaziriA],
        	['name'=>'Waziri B','pollingUnits'=> new WaziriB],
        	['name'=>'Waziri C','pollingUnits'=> new WaziriC],
        	
        ];
	}







}