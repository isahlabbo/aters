<?php
namespace App\Services\PollingUnit\Gudu;

/**
* this class binji ward array and create their polling unit
*/
class GuduPollingUnits
{
	
	function __construct()
	{
		$this->pollingUnits = $this->getPollingUnits();
	}

	protected function getPollingUnits()
	{
        return [
        	['name'=>'Awulkiti','pollingUnits'=> new Awulkiti],
        	['name'=>'Bachaka','pollingUnits'=> new Bachaka],
        	['name'=>'Balle','pollingUnits'=> new Balle],
        	['name'=>'Chilas','pollingUnits'=> new Chilas],
        	['name'=>'Gwazange','pollingUnits'=> new Gwazange],
        	['name'=>'KarfenChana','pollingUnits'=> new KarfenChana],
        	['name'=>'KarfenSarki','pollingUnits'=> new KarfenSarki],
        	['name'=>'Kurdula','pollingUnits'=> new Kurdula],
        	['name'=>'MarakenBori','pollingUnits'=> new MarakenBori],
        	['name'=>'TulunDoya','pollingUnits'=> new TulunDoya],
        ];
	}


}