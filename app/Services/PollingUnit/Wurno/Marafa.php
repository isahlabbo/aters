<?php

namespace App\Services\PollingUnit\Wurno;
/**
* this class will retun the polling unit of class
*/
class Marafa
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'DANDIKKO/T.V CENTRE',
			'SHIYAR WANBAI/UPPER AREA COURT',
			'SHIYAR FADAMA/SHIYAR FADAMA',
			'SHIYAR YARI GALADIMA',
			'ALUN MAIGANDI/YARKITA ‐ RUGAGAWA',
			'SIFAWA PRY SCH',
			'MAIGEZA/GARKA',
			'GIDADAWA/KANURI',
			'SHIYAR MASIDADI',
			'SHIYAR BARKIYA',
			'SHIYAR DANWARAWA',
			'S/GARIN TURU TV SHEHU MAL M/PR'
		];
	}
}