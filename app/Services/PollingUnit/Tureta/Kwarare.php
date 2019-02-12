<?php

namespace App\Services\PollingUnit\Tureta;
/**
* this class will return all polling units of the class
*/
class Kwarare
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'KAURA ‐ KWARARE PRI.SCHOOL I',
			'KAURA ‐ KWARARE PRI.SCHOOL II',
			'KAURA NIZZAMIYYA',
			"GIDAN BA'ARE",
			'RAFIN GORA ‐ RAFIN GORA'
		];
	}
}
