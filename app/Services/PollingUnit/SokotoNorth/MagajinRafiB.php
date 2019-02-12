<?php

namespace App\Services\PollingUnit\SokotoNorth;
/**
* this class will return polling Units of the class
*/
class MagajinRafiB
{
	
	function __construct()
	{
		$this->pollingUnits = $this->PollingUnits();
	}

	public function pollingUnits()
	{
		return [
			'SH/BELLO ZORAMAWA',
			'PRISON YARD ‐ PRISON YARD',
			"HALIRU SARKIN GONA MODEL PRIMARY SCHOOL (GARKAR DANDURBAWA)",
			'SHIYAR ABDUWA TAKI',
			'GARKAR ALKALI YAHAYA',
			'SHIYAR BARUMI',
			'GARKAR S/GONA',
			'GARKAR KYAHIE',
			"SH/ABDUWA ‐ SH/ABDUWA NEAR G/ABDUWA/GARKAR ABDUWA 'A'",
			"OPPOSITE GIDAN HAMZA TSAMIYAR GURUZA (SHIYAR ABDUWA B)",
			"SH/CHIKA ‐ SH/CHIKA NEAR G/CHIKA/GARKAR CHAKA",
			'CHIKA MARKET',
			'OFFISHIN HAKIMI ‐ OFFISHIN HAKIMI',
			'GARKAR ALU MAGAWATA',
			'GARKAR ZARUKU',
			'BESIDE CHARKANIYA HOUSE (SHIYAR ALKALI AMADU A)',
			'SHIYAR ALKALI AMADU B',
			'GARKAR DAN KATSINA',
			'GARKA DAN DURBAWA'
		];
	}
}
