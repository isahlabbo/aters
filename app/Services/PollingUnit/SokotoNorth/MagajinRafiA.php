<?php

namespace App\Services\PollingUnit\SokotoNorth;
/**
* this class will return polling Units of the class
*/
class MagajinRafiA
{
	
	function __construct()
	{
		$this->pollingUnits = $this->PollingUnits();
	}

	public function pollingUnits()
	{
		return [
			'SH/SARKI D/BAZAZZAGI I',
			'HUNGUMAWA MODEL PRIMARY SCHOO (SH SARKI D/BAZZAGAGI II)',
			'SH/MAZUGA A',
			'SH/MAZUGA B G/DANIYA',
			'KUFAR RINI SH/NAMADINA',
			'SH/DAN MALIKI TSOHO',
			'SHIYAR ABDULLAHI MAI GWANDU',
			'SHIYAR MAIGWANDU MADAKA',
			'SH/MAI.NUHU A',
			'SH/MAI.NUHU B GIDAN ARZIKA',
			'SH/ABDULLAHI MEGA',
			'OFFISHIN HAKIMI TSOHO',
			'OFFISHIN HAKIMI T G/S/DANKO',
			'SH/MAGAJIN RAFI TSOHO',
			'SH/S/SUDAN',
		];
	}
}
