<?php
namespace App\Services\PollingUnit\SabonBirni;

/**
* this class return the array of polling unit of the class
*/
class Gangara
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'SHIYAR MAGAJI',
			'PRI‐SCH (SHIYAR AJIYA)',
			'SHIYAR MAGAJI DISPENSARY I',
			'SHIYAR MAGAJI DISPENSARY II',
			'SHIYAR YANUSA ‐ SHIYAR YANUSA',
			'MAKWARUWA',
			'SHADDAWA',
			'DANBISO MPS',
			'DAN‐BIZO DADIN KOWA',
			'DANTASAKKO I',
			'DANTASAKKO II',
			'ATTALAWA I',
			'PRI. SCH. ATALAWA (ATALAWA II)'
		];
	}
}