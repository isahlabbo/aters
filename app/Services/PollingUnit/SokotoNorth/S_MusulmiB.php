<?php

namespace App\Services\PollingUnit\SokotoNorth;
/**
* this class will return polling Units of the class
*/
class S_MusulmiB
{
	
	function __construct()
	{
		$this->pollingUnits = $this->PollingUnits();
	}

	public function pollingUnits()
	{
		return [
			'OFFISHIN HAKIMI ‐ OFFISHIN HAKIMI',
			'SH/MAI.BUHARI ‐ SH/MAI.BUHARI',
			'GIDAN IBRAHIM GUSAU',
			'DANHILI HUBBARE',
			'SH/MAIWURNO ‐ SH/MAIWURNO',
			'SH/MARAFA WALIJO ‐ SH/MARAFA WALIJO',
			'GIDAN MAHE HUBBARE',
			'SH/SARKIN YAKI ‐ SH/SARKIN YAKI'
		];
	}
}
