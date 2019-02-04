<?php

namespace App\Services\PollingUnit\Tambuwal;
/**
* this class will return polling unit of this class
*/

class Barkeji_Nabaguda
{
	function __construct()
	{
	    $this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'SHIYAR UBANDAWAKI ‐ BARKEJI PRI.SCHOOL',
			'SHIYAR GALADIMA I',
			'SHIYAR GALADIMA‐KANWURI',
			'SHABRA ATTO/MAIKUDU PRI. SCH.',
			'SABAWA U/DOROWA ‐ DANHILI',
			'GONINGE SABONGARI ‐ DANHILI',
			'GESEBADE/JAJA MADI ‐ DANHILI',
			'MADARA ‐ MADARA PRI.SCHOOL',
			'KALGON NOMA ‐ KALGO PRI.SCHOOL',
			'NABUGUDA T/MADI PRI.SCHOOL',
			'YAMADILLA/JAMUKKA ‐ DANHILI',
			'KALGON RAFI ‐ DANHILI'
		];
	}
}