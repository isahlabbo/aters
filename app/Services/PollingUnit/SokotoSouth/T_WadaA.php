<?php

namespace App\Services\PollingUnit\SokotoSouth;
/**
* this class will return the pollin unit of the class
*/
class T_WadaA
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'GIDAN NA ILLO',
			'GARKAR MAGAJI',
			'ISAH NA MALLANDO I',
			'ISAH NA MALLANDO II',
			'G. SARKIN HAUSAWA I',
			'G. SARKIN HAUSAWA II',
			'ADULT EDUCATION',
			'TUDUN WADA ADULT EDUCATION',
			'G. TUKUR DALLATU I',
			'G. TUKUR DALLATU II',
			'NEAR JIBRIL MOSQUE',
			'DALLATU M.P.S',
			'RIYOJIN DAN UMMA I',
			'RIYOJIN DAN UMMA II',
			'GAWON DAN NUNU I',
			'GAWON DAN NUNU II',
			'GARKAR HAYATU I',
			'GARKAR HAYATU II',
			'MAGAJIN RAFI M.P.S I',
			'MAGAJIN RAFI M.P.S II',
			'GARKAR MAINASARA I',
			'GARKAR MAINASARA II',
			'L.G.E.A',
			'GARKAR DALLATU I',
			'GARKAR DALLATU II',
			'TUDUN DAN WANZAM'
		];
	}
}