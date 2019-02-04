<?php

namespace App\Services\PollingUnit\Wurno;
/**
* this class will retun the polling unit of class
*/
class Alkammu
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}
	protected function pollingUnits()
	{
		return [
			'SHIYAR UBANDAWAKI/SHIYAR UBANDAWAKI',
			'SHIYAR HAKIMI',
			'SHIYAR SARKIN YAKI',
			'KAURARE',
			'KOFAR GUMBORAWA',
			'BORAYE',
			'GYEL GYEL',
			'KANDAM',
			'YANTABAU',
			'GIDAN INDA',
			'DABAGIN KUKUTA',
			'UNGUWAR MATA'
		];
	}
}