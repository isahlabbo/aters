<?php

namespace App\Services\PollingUnit\SokotoSouth;
/**
* this class will return the pollin unit of the class
*/
class GagiB
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'GARKAR ABDUL KADIR MABERA MUJAYA',
			'YAHAYA GUSAU MODEL PRI.SCHOOL I',
			'YAHAYA GUSAU MODEL PRI.SCHOOL II',
			'GARKAR DIKKO MABERA MUJAYA',
			'GARKAR UBAN DAWAKI',
			'FEDERAL GOVT. COLLEGE',
			'SAKOFAR DAWAYI',
			'OFFA ROAD',
			'GARKAR KWAIRE',
			'UNGUWAR DUTSE I',
			'UNGUWAR DUTSE II'
		];
	}
}