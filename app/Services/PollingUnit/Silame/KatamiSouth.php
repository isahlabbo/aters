<?php

namespace App\Services\PollingUnit\Silame;

/**
* this class will return the polling units of all the 
*/
class KatamiSouth
{
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return[
			'SHIYAR GANDU/BAKIN KOLI',
			'SHIYAR GANDU/KALGO',
			'SHIYAR GANDU/DOGON FILI',
			'SHIYAR SAUNA/KASUWA',
			"PRIMARY SCHOOL TANERA GIDAN MAGAJI (TAJENERA/FILIN TANERA)",
			"GYATAME FILIN (SHIYAR DAN GALADIMA / BOKO)",
			'GADAMBE/FILIN GADAMBE',
			"FILIN AGERE (SHIYAR ZARUMAI/AGERI)",
			'GADAMBE/FILIN GADAMBE'    
		];
	}
}