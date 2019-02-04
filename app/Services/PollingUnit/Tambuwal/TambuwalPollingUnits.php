<?php
namespace App\Services\PollingUnit\Tambuwal;

/**
* this class binji ward array and create their polling unit
*/
class TambuwalPollingUnits
{
	
	function __construct()
	{
		$this->pollingUnits = $this->getPollingUnits();
	}

	protected function getPollingUnits()
	{
        return [
        	
        	['name'=>'Bagida Lukkingo','pollingUnits'=> new Bagida_Lukkingo],
        	['name'=>'Bakaya / Sabon Birni','pollingUnits'=> new Bakaya_SabonBirni],
        	['name'=>'Barkeji/Nabaguda','pollingUnits'=> new Barkeji_Nabaguda],
        	['name'=>'Bashire/Maikada','pollingUnits'=> new Bashire_Maikada],
        	['name'=>'Dogon Daji/Sala','pollingUnits'=> new DogonDaji_Sala],
        	['name'=>'Faga/Alasan','pollingUnits'=> new Faga_Alasan],
        	['name'=>'Jabo/Kagara','pollingUnits'=> new Jabo_Kagara],
        	['name'=>'Romon Sarki','pollingUnits'=> new RomonSarki],
        	['name'=>'Saida/Goshe','pollingUnits'=> new Saida_Goshe],
        	['name'=>'Sanyinna','pollingUnits'=> new Sanyinna],
        	['name'=>'Tambuwal/Shinfiri','pollingUnits'=> new Tambuwal_Shinfiri],
        	
        ];
	}


}