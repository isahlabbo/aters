<?php

namespace App\Services\PollingUnit\Wurno;
/**
* this class will retun the polling unit of class
*/
class Dinbiso
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}
	protected function pollingUnits()
	{
		return [
			'DIMBISO SHIYAR SHUGABA',
			'DIMBISO SHIYAR SARKIN RUWA',
			'NASARAWAR BAZAI',
			'DUHUWAR MARANAWA',
			'DUHUWAR GUMSA',
			'GIDAN KAMBA / BANGO'
		];
	}
}