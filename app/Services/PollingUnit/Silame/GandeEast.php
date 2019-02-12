<?php

namespace App\Services\PollingUnit\Silame;

/**
* this class will return the polling units of all the 
*/
class GandeEast
{
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return[
			'DARGANA/MODEL PRI.SCHOOL',
			'FALANJE/MODEL PRI.SCHOOL FALANJE',
			'GIDAN MAGAJI (JERINGO/TOWN FIELD)',
			'KAYA/MODEL PRI.SCHOOL KAYA',
			'MALE/MODEL PRI.SCHOOL',
			'SHIYAR MAI YAKI/VILLAGE HEAD OFF.GANDE',
			'SHIYAR MAI YAKI/VMODEL PRI.SCHOOL',
			'SHIYAR MAI KABI/FILIN JARIRI',
			'BOYIN GOJE/SHIYAR MASHAYA',
			'BOYIN GOJE/KOFAR MALE',
			'DARGANA‐DAN HILI'     
		];
	}
}