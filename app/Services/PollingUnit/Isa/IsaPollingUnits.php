<?php
namespace App\Services\PollingUnit\Isa;

/**
* this class binji ward array and create their polling unit
*/
class IsaPollingUnits
{
	
	function __construct()
	{
		$this->pollingUnits = $this->getPollingUnits();
	}

	protected function getPollingUnits()
	{
        return [
        	['name'=>'Bargaja','pollingUnits'=> new Bargaja],
        	['name'=>'Gebe A','pollingUnits'=> new Gebe_A],
        	['name'=>'Gebe B','pollingUnits'=> new Gebe_B],
        	['name'=>'Isa_North','pollingUnits'=> new Isa_North],
        	['name'=>'Isa_South','pollingUnits'=> new Isa_South],
        	['name'=>'Tidibale','pollingUnits'=> new Tidibale],
        	['name'=>'Tozai','pollingUnits'=> new Tozai],
        	['name'=>'TsabarenSarkinDarai','pollingUnits'=> new TsabarenSarkinDarai],
        	['name'=>'Turba','pollingUnits'=> new Turba],
        	['name'=>'Yanfako','pollingUnits'=> new Yanfako],
        ];
	}


}