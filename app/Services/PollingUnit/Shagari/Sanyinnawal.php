<?php
namespace App\Services\PollingUnit\Shagari;
/**
* this class will return the array of its polling unit
*/
class Sanyinnawal
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'SANYINNAWAL ‐ SHIYAR YAMMA',
			'SANYINNAWAL/KANWURI',
			'MPS YARDUTSI (SANYINNAWAL YARDUTSI)',
			'MPS RUNJIN KAKA (RUNJIN KAKA)',
			'KAROGA ‐ SHIYAR HAKIMI',
			'MPS TOFA (TOFA)',
			'MPS BADUKA (BADUKA/YOLA/NAHUCE)',
			'KALANGU MPS (KALANGU)',
			'KAURARE/YAR‐GUSAU',
			'KAURARE CLINIC (KABAWA/BULAN YAK)I',
			'CLINIC BULANYAKI ‐ ZAMFARAWA (BULAN YAKI ZAMFARAWA)',
			'CLINIC BULANYAKI/MARINA (BULAN YAKI MARINA)',
			'KAROGA ‐ PPRI.SCHOOL'
		];
	}
}
