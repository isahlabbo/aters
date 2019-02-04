<?php
namespace App\Services\PollingUnit\Yabo;
/**
* 
*/
class RuggarIya
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected  function pollingUnits()
	{
		return [
            'RUGGAR IYA',
			'DAN BALLO PRIMARY SCHOOL (DAN BALLO)',
			'DAGA SHIYAR MAGAJI MAIZANE',
			'SMALL MARKET (SS/M/YARCHIRA/ YAR CERA)',
			'MAGABCIN SARKI',
			'ZEZI/RUGALDU',
			'MUZURU GIDAN GALMA',
			'ZAMFARAWA P RIMARY SCHOOL (ZAMFARAWA TSIR MUDU)',
			'RUGGAR GABASMAGABUN MARAFA',
			'GOMARA/KAURATABA KETARE',
			'RUGGAR KIJO'
		];
	}
}