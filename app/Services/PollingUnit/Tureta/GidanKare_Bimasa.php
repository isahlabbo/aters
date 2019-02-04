<?php

namespace App\Services\PollingUnit\Tureta;
/**
* this class will return all polling units of the class
*/
class GidanKare_Bimasa
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'BIMASAGARI ‐ BIMASA GARI',
			'BIMA ‐ SHIYAR SARKIN ASKI',
			'BIMASA TAISHA ‐ PRI.SCHOOL',
			'BAGIRBI ‐ PRI.SCHOOL',
			'MAHUTA ‐ MAHUTA',
			'GIDAN KARE ‐ PRI.SCHOOL',
			'DORAWA ‐ DORAWA',
			'JANWAKE ‐ JANWAKE',
			'TARANA ‐ TARANA'
		];
	}
}
