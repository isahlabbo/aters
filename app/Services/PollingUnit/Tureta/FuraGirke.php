<?php

namespace App\Services\PollingUnit\Tureta;
/**
* this class will return all polling units of the class
*/
class FuraGirke
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'FURA GIRKE ‐ PRI.SCHOOL',
			'GIDDIN BISHIYA GASRKAR HAKIMI FURA GIRKE OPEN SPACE I (FURA GIRKE)',
			'GARBE KANNI ‐ GARBE KANNI',
			'JANKWARE ‐ JANKWARE',
			'RANDA ‐ RAND',
			'GIDDIN BISHIYA GASRKAR HAKIMI DAN FILI OPEN SPACE II (FURA GIRKE)'
		];
	}
}
