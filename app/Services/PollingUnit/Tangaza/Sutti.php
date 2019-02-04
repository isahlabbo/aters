<?php

namespace App\Services\PollingUnit\Tangaza;
/**
* this class will return the polling units of the class
*/
class Sutti
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'SUTTI ‐ PRI.SCHOOL',
			'BAKYARMA ‐ PRI.SCHOOL',
			'ALELA ‐ DANFILI',
			'RIMI ‐ DANFILI',
			'TSITSE ‐ DANFILI',
			'TUDUN RUWA ‐ DANFILI',
			'KWARAKKA ‐ PRI.SCHOOL',
			'BARARRAHE ‐ PRI.SCHOOL',
			'CHINGORA'
		];
	}
}