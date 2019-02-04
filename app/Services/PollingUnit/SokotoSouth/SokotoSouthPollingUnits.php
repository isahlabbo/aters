<?php
namespace App\Services\PollingUnit\SokotoSouth;

/**
* this class binji ward array and create their polling unit
*/
class SokotoSouthPollingUnits
{
	
	function __construct()
	{
		$this->pollingUnits = $this->getPollingUnits();
	}

	protected function getPollingUnits()
	{
        return [
        	
        	['name'=>'Gagi A','pollingUnits'=> new GagiA],
        	['name'=>'Gagi B','pollingUnits'=> new GagiB],
        	['name'=>'Gagi C','pollingUnits'=> new GagiC],
        	['name'=>'R/Dorowa A','pollingUnits'=> new R_DorowaA],
        	['name'=>'R/Dorowa B','pollingUnits'=> new R_DorowaB],
        	['name'=>'S/A/K/Atiku','pollingUnits'=> new S_A_K_Atiku],
        	['name'=>'S/Zamfara A','pollingUnits'=> new S_ZamfaraA],
        	['name'=>'S/Zamfara B','pollingUnits'=> new S_ZamfaraB],
        	['name'=>'Sarkin Adar Kwanni','pollingUnits'=> new SarkinAdarKwanni],
        	['name'=>'T/Wada A','pollingUnits'=> new T_WadaA],
        	['name'=>'T/Wada B','pollingUnits'=> new T_WadaB],
        	
        ];
	}


}