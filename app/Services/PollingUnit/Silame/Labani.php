<?php

namespace App\Services\PollingUnit\Silame;

/**
* this class will return the polling units of all the 
*/
class Labani
{
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return[
			'LABANI/MODEL PRI.SCHOOL',
			'PRIMARY SCHOOL ALFALA (ALFALA / TOWN FIELD)',
			'KWAGGEL/TOWN FIELD',
			'BETARE PRIMARY SCHOOL (BETARE/TOWN FIELD)',
			'GALADI/PRI.SCHOOL',
			'RUMDI/MODEL PRY SCH.',
			'RUMBUKI/TOWN FIELD'
		];
	}
}