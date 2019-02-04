<?php
namespace App\Services\PollingUnit\Kebbe;

/**
* this class binji ward array and create their polling unit
*/
class KebbePollingUnits
{
	
	function __construct()
	{
		$this->pollingUnits = $this->getPollingUnits();
	}

	protected function getPollingUnits()
	{
        return [
        	['name'=>'Fakku','pollingUnits'=> new Fakku],
        	['name'=>'Girkau','pollingUnits'=> new Girkau],
        	['name'=>'KebbeEast','pollingUnits'=> new KebbeEast],
        	['name'=>'KebbeWest','pollingUnits'=> new KebbeWest],
        	['name'=>'Kuchi','pollingUnits'=> new Kuchi],
        	['name'=>'Margai A','pollingUnits'=> new Margai_A],
        	['name'=>'Margai B','pollingUnits'=> new Margai_B],
        	['name'=>'Nasagudu','pollingUnits'=> new Nasagudu],
        	['name'=>'Sangi','pollingUnits'=> new Sangi],
        	['name'=>'Ungushi','pollingUnits'=> new Ungushi],
        ];
	}


}