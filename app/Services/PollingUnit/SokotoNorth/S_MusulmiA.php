<?php

namespace App\Services\PollingUnit\SokotoNorth;
/**
* this class will return polling Units of the class
*/
class S_MusulmiA
{
	
	function __construct()
	{
		$this->pollingUnits = $this->PollingUnits();
	}

	public function pollingUnits()
	{
		return [
			'BY THE MAIN GATE OF SULTAN PALACE ALONG DJORI HAMMANI ROAD (GIDAN SARKIN MUSULMI)',
			'KOFAR BAI ‐ KOFAR BAI',
			'GIDAN MUAZU NA LIMAN',
			'WAJE AREA COURT ‐ WAJE AREA COURT',
			'SULTAN WARD PRI.SCHOOL ‐ SULTAN WARD PRI.SCH.',
			'MAMMAN KADA ‐ MAMMAN KADA',
			'GIDAN AMINU ALKANCHI',
			'KOFAR BAI ‐ KOFAR BAI DAN HILI',
			'SULTAN WARD PRIMARY SCHOOL (G. GARKUWA KWANDAMAWA)'
		];
	}
}
