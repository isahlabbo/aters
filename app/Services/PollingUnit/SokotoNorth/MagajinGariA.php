<?php

namespace App\Services\PollingUnit\SokotoNorth;
/**
* this class will return polling Units of the class
*/
class MagajinGariA
{
	
	function __construct()
	{
		$this->pollingUnits = $this->PollingUnits();
	}

	public function pollingUnits()
	{
		return [
			'OPEN SPACE OPPOSITE GIDAN MAGAJIN GARI (MAGAJI GARI A)',
			'MAGAJIN GARI B ‐ MAGAJIN GARI B',
			'GARKAR BARWA',
			'ALKALI MIKA’ILU PRIMARY SCHOOL (GARKAR YAR MAGARWA)',
			'GARKAR BELLO MAIGORO',
			"OFFISHINI HAKIMI 'A'",
			"OFFISHINI HAKIMI 'B'",
			'HELELE CLINIC I',
			'OPEN SPACE NEAR GIDAN MAMMAN DAN AUTA (G/MAMMAN DAN AUTA)',
			'GARKAR SIDI MAMMAN',
			'GARKAR SARKIN FAWA',
			'GARKAR IDI',
			'GARKAR BELLO S/BAKI',
			'GARKAR ALA AJI',
			'GARKAR SAJO',
			'GARKAR ALKALI MALLERI',
			'GARKAR MAIRIGA',
			'OPEN SPACE NEAR ALH. ABU MAIBUHU YARSAKE (GARKAR ALH. ABDU MAIBUHU)',
			'HELELE PRIMARY SCHOOL YARSAKKE (HELELE CLINIC II)',
		];
	}
}
