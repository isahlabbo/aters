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
			'GAGI GARKAR ABDUL KADIR MABERA MUJAYA',
			'GAGI YAHAYA GUSAU MODEL PRI.SCHOOL I',
			'GAGI YAHAYA GUSAU MODEL PRI.SCHOOL II',
			'GAGI GARKAR DIKKO MABERA MUJAYA',
			'GAGI GARKAR UBAN DAWAKI',
			'GAGI FEDERAL GOVT. COLLEGE',
			'GAGI SAGAGI KOFAR DAWAYI',
			'GAGI OFFA ROAD',
			'GAGI GARKAR KWAIRE',
			'GAGI UNGUWAR DUTSE I',
			'GAGI UNGUWAR DUTSE II'
		];
	}
}