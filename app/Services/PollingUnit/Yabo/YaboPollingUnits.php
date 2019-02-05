<?php
namespace App\Services\PollingUnit\Yabo;
/**
* this class binji ward array and create their polling unit
*/
class YaboPollingUnits
{
	
	function __construct()
	{
		$this->pollingUnits = $this->getPollingUnits();
	}

	protected function getPollingUnits()
	{
        return [
        	
        	['name'=>'Bakale','pollingUnits'=> new Bakale],
        	['name'=>'Bingaje','pollingUnits'=> new Bingaje],
        	['name'=>'Binji','pollingUnits'=> new Binji],
        	['name'=>'Birni Ruwa','pollingUnits'=> new BirniRuwa],
        	['name'=>'Fakka','pollingUnits'=> new Fakka],
        	['name'=>'Kilgori','pollingUnits'=> new Kilgori],
        	['name'=>'Ruggar Iya','pollingUnits'=> new RuggarIya],
        	['name'=>'Torankawa','pollingUnits'=> new Torankawa],
        	['name'=>'Yabo A','pollingUnits'=> new YaboA],
        	['name'=>'Yabo B','pollingUnits'=> new YaboB],
        	
        ];
	}


}