<?php

namespace App\Services\PollingUnit\Tangaza;
/**
* this class will return the polling units of the class
*/
class Raka
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'RAKA ‐ PRI.SCHOOL',
			'RAKA DUTSI ‐ DANFILI',
			'DANFILI LADINDO (LADINDO‐SHIYARHAKIMI)',
			'GANDABA GABAS ‐ PRI.SCHOOL',
			'BILANGAWA / DANFILI OPEN SPACE (BILANGAWA ‐ SHIYAR HAKIMI)',
			'DABAGI ‐ PRI.SCHOOL',
			'MADARARE ‐ PRI.SCHOOL',
			'RAKA DANFILI'
		];
	}
}