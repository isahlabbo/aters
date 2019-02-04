<?php
namespace App\Services\PollingUnit\Shagari;
/**
* this class will return the array of its polling unit
*/
class HoroBirni
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'DAN FILI (SHIYYAR GALADIMA)',
			'DAN FILI BAKIN KASUWA (SHIYAR MAGAJI)',
			'SHIYAR DIKKO ‐ HORO PRI.SCHOOL',
			'DAN FILI (HORO DANBARO SHIYYAR WALI)',
			'HORO DANBARO SHIYAR UBAN DAWAKI',
			'SABARA M.P.S',
			'RUGGAR YARA/DUSTE',
			'BIRI ZANGO',
			'KAURARE/KAURARE',
			'GIDAN AGIGGI'
		];
	}
}
