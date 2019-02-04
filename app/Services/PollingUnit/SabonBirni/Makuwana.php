<?php
namespace App\Services\PollingUnit\SabonBirni;

/**
* this class return the array of polling unit of the class
*/
class Makuwana
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'FILIN MAGAJI ‐ SHIYAR LADAN',
			'KOFAR DURUMBU ‐ SHIYAR DANGALADIMA',
			'PRI.SCHOOL ‐ FARU',
			'ALKALAWA ‐ ALKALAWA',
			'BAKIN KASUWA (YARBULUTU)',
			'GARIN MALAMAI ‐ GARIN MALAMAI',
			'ZALLA BANGO ‐ ZALLA BANGO',
			'GARIN FAJI',
			'GARIN BATURE',
			'JINGILMA ‐ JINGILMA',
			'DANBA',
			'KARARI ‐ KARARI',
			'ZANGON MAKUWANA ‐ ZANGON MAKUWANA',
			'DAN‐GAWO',
			'YAR BULUTO'
		];
	}
}