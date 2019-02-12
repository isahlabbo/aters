<?php

namespace App\Services\PollingUnit\Silame;

/**
* this class will return the polling units of all the 
*/
class GandeWest
{
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return[
			'GAUKAI/PRI.SCHOOL',
			'GAUKAI/TOWN FIELD',
			"KULALU/MODEL PRI'SCHOOL",
			'CHOFAL TOWN FIELD',
			'GIDAN KAYA/TOWN FIELD',
			'GAUKAI TUNGA',
			'GIDAN YAYA TANKARAWA',
			'GIDANYAYA PRI.SCHOOL'
		];
	}
}