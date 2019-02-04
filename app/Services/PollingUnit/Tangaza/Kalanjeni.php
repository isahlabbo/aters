<?php

namespace App\Services\PollingUnit\Tangaza;
/**
* this class will return the polling units of the class
*/
class Kalanjeni
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'K/BASHARU ‐ PRI.SCHOOL',
			'K/MAGAJI ‐ DANFILI',
			'GIDIMA DANFILI',
			'ADARAWA ‐ PRI.SCHOOL',
			'BADEJI ‐ PRI.SCHOOL',
			'KALANJENI MAIBURGAME'
		];
	}
}