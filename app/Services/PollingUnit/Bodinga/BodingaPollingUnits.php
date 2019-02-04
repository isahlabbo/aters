<?php
namespace App\Services\PollingUnit\Bodinga;

/**
* this class binji ward array and create their polling unit
*/
class BodingaPollingUnits
{
	
	function __construct()
	{
		
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
        return [
        	['name'=>'KwacciyarLalle','pollingUnits'=> new KwacciyarLalle],
        	['name'=>'MazanGari','pollingUnits'=> new MazanGari],
        	['name'=>'Sifawa','pollingUnits'=> new Sifawa],
        	['name'=>'Takatuku','pollingUnits'=> new Takatuku],
        	['name'=>'Tulluwa','pollingUnits'=> new Tulluwa],
        ];
	}


}