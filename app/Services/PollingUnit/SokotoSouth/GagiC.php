<?php

namespace App\Services\PollingUnit\SokotoSouth;
/**
* this class will return the pollin unit of the class
*/
class GagiC
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'GAGI TAFIDA AMINU MODEL PRI.SCHOOL',
			'GAGI GIDAN JELANI M. JELANI I',
			'GAGI GIDAN JELANI M. JELANI II',
			'GAGI GOVT GIRLS COLLEGE I',
			'GAGI GOVT GIRLS COLLEGE II',
			'GAGI GARKAR SIDI',
			'GAGI MABERA MAGAJI',
			'GAGI GIDAN JARIRI PRY. SCH',
			'GAGI GIDAN DAHALA',
			'GAGI GIDAN DAN AMIRU',
			'GAGI SABON GIDA',
			'M‐G.S AWAYE'
		];
	}
}