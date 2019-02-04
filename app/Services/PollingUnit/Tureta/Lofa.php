<?php

namespace App\Services\PollingUnit\Tureta;
/**
* this class will return all polling units of the class
*/
class Lofa
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'DIDI GAMJI ‐ DIDI GAMJI',
			'DIDI GAMJI ‐ DIDI ALFA',
			'LOFA ‐ PRI.SCHOOL',
			'MODOMAWA ‐ PRI.SCHOOL',
			'LOFA GIDAN GULBI',
			'LOFA SHIYAR MAKADA'
		];
	}
}
