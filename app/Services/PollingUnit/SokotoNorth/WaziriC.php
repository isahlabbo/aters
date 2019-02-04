<?php

namespace App\Services\PollingUnit\SokotoNorth;
/**
* this class will return polling Units of the class
*/
class WaziriC
{
	
	function __construct()
	{
		$this->pollingUnits = $this->PollingUnits();
	}

	public function pollingUnits()
	{
		return [
            'KOFAR RINI CLINIC',
			'SOKOTO CINIMA ‐ SOKOTO CINAMA',
			'FED SAVING BANK',
			'J.S.S CIROMA BELLO [ILLELA GARAGE II] (GIDAN MAITUMARI)',
			'KUDANCIN ISA MAIKWARE MOSQUE I (SHIYAR ABDU MAI WELDER I)',
			'KUDANCIN ISA MAIKWARE MOSQUE II (SHIRYAR ABDU MAI WELDER II)',
			'SHIYAR.BARAU MAIKATAKO',
			'ILLELA GARAGE I',
			'J.S.S CIROMA BELLO (ILLELA GARAGE II)',
			'SHIYAR SAMAILA',
			'GARKAR MAKWASA',
			'GABAS GA K/RINI CLINIC NEAR TANKIN RUWA (G/MAI UNGUWAD/TANIN)',
			'SHIYHAR MALAN JATAU',
			'J.S.S CIROMA BELLO (SHIYAR MAL. LABBO)'
		];
	}
}
