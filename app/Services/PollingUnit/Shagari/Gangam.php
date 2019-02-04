<?php
namespace App\Services\PollingUnit\Shagari;
/**
* this class will return the array of its polling unit
*/
class Gangam
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'GAMGAM ‐ MODEL PRI.SCHOOL',
			'GAMGAM ‐ BADI',
			'RUGGAR BUDA MPS (RUGGAR BUDA)',
			'TAKALMAWA/TAKALMAWA',
			'LUNGU',
			'TUNGAR BARKI',
			'ASKE DODO',
			'BANGA HURDU',
			'YANDUN DAJI',
			'LOKOKA'
		];
	}
}
