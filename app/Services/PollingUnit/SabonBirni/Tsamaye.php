<?php
namespace App\Services\PollingUnit\SabonBirni;

/**
* this class return the array of polling unit of the class
*/
class Tsamaye
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'AMUZAWA ‐ AMUZAWA',
			'PRI.SCHOOL ‐ LABAU',
			'GIDAN SHEKARAU DANFILI',
			'BAWTARE ‐ BAWTARE',
			'TAKASUWA ‐ TAKASUWA',
			'GIDAN MIKO ‐ GIDAN MIKO',
			'GIDAN ‐ GAGO ‐ GIDAN GAGO',
			'GIDAN SHEKARAU DAN FILI',
			'PRI.SCHOOL ‐ TSAMAYE',
			'DUNKUDUMI ‐ DUNKUDUMI',
			'PRI.SCHOOL ‐ KURU‐KURU',
			'GIDAN DAGI ‐ GIDAN DAGI',
			'TSAMAYE PRI. SCH. (GIDAN MIKO)',
			'OLD PRI SCH. BORAI (BORAI)',
			'SANGU ‐ SANGU',
			'TSULULU PRI.SCHOOL ‐ TSULULU',
			'HUNKUI ‐ HUNKUI',
			'TSAMAYE DANFILI ‐ TSAMAYE'
		];
	}
}