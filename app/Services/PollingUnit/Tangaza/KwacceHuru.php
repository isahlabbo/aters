<?php

namespace App\Services\PollingUnit\Tangaza;
/**
* this class will return the polling units of the class
*/
class KwacceHuru
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'KWACCE HURU ‐ PRI.SCHOOL',
			'DANFILISILDEWO (SIDEWO‐SHIYAR HAKIMI)',
			'ARABAR BIRNI ‐ DANFILI',
			'ARABAR DAJI ‐ DANFILI',
			'GANAJAYE ‐ PRI.SCHOOL',
			'RAMU CERA ‐ PRI.SCHOOL',
			'KWANNAWA ‐ PRI.SCHOOL'
		];
	}
}