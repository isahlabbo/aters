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
			'TAFIDA AMINU MODEL PRI.SCHOOL',
			'GIDAN JELANI M. JELANI I',
			'GIDAN JELANI M. JELANI II',
			'GOVT GIRLS COLLEGE I',
			'GOVT GIRLS COLLEGE II',
			'GARKAR SIDI',
			'MABERA MAGAJI',
			'GIDAN JARIRI PRY. SCH',
			'GIDAN DAHALA',
			'GIDAN DAN AMIRU',
			'SABON GIDA',
			'M‐G.S AWAYE'
		];
	}
}