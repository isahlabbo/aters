<?php

namespace App\Services\PollingUnit\SokotoSouth;
/**
* this class will return the pollin unit of the class
*/
class GagiA
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'GAGI GARKA S/YAKI',
			'GAGI GARKA UBANDOMA',
			'GAGI GARKA MARAFA',
			'GAGI GIDAN MASAU',
			'GAGI MANA BABBA',
			'GAGI MANA KARAM',
			'GAGI GIDAN DILO',
			'NAKASARI PRI. SCH',
			'GARKAR JAWO',
			'GAGI TAMAJE',
			'GAGI SCHOOL OF NURSING'
		];
	}
}