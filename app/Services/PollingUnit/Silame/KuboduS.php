<?php

namespace App\Services\PollingUnit\Silame;

/**
* this class will return the polling units of all the 
*/
class KuboduS
{
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return[
            'TOZO SHIYAR MA KADA/PRI.SCHOOL TOZO',
			"TOZO KA'ISA WALE/TOWN FIELD",
			'JEKANADU BIRNI/TOWN FIELD',
			'GABBUWA/PRI.SCHOOL GABBUWA',
			'TULLURE / M.P SCHOOL',
			'JEKANADU BAICHE/PRI.SCHOOL JEKANADU',
		];
	}
}