<?php
namespace App\Services\PollingUnit\SabonBirni;

/**
* this class return the array of polling unit of the class
*/
class Tara
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'GARIN HILLO ‐ GARIN HILLO',
			'DISPENSARY ‐ SHIYAR KOFA',
			'SHIYAR BARA I',
			'PRI‐SCH (SHIYAR BORAI II)',
			'GARIN ZAGO',
			'NASARAWA',
			'RAMBADAWA',
			'TSAUNA GARIN ANGO',
			'GIDAN HASSAN ‐ GIDAN ‐ HASSAN',
			'GARIN IDI KWARE ‐ GARIN IDI KWARE',
			'GARIN IDI TUDU',
			'PRI. SCH. SHIYAR KOFA (SHIYAR KOFA)',
			'SHIYAR HABIBU',
			'PRI.SCHOOL ‐ GARIN ZANGO',
			'PRI. SCH. RAMBADAWA (RAMBADAWA PRI.SCH. ‐ RAMBADAWA)'
		];
	}
}