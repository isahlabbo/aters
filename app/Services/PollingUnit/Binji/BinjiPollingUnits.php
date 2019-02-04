<?php
namespace App\Services\PollingUnit\Binji;

/**
* this class binji ward array and create their polling unit
*/
class BinjiPollingUnits
{

	function __construct()
	{
		$this->pollingUnits = $this->getPollingUnits();
	}

	protected function getPollingUnits()
	{
        return [
        	['name'=>'Binji','pollingUnits'=> new Binji],
            ['name'=>'Bunkari','pollingUnits'=> new Bunkari],
            ['name'=>'Gawazzai','pollingUnits'=> new Gawazzi],
            ['name'=>'Inname','pollingUnits'=> new Inname],
            ['name'=>'Jammali','pollingUnits'=> new Jammali],
            ['name'=>'Maikulki','pollingUnits'=> new Maikulki],
            ['name'=>'Samama','pollingUnits'=> new Samama],
            ['name'=>'Soro Gabas','pollingUnits'=> new SoroGabas],
            ['name'=>'Soro Yamma','pollingUnits'=> new SoroYamma],
            ['name'=>'T/Kose','pollingUnits'=> new TungarKose]
        ];
	}
}