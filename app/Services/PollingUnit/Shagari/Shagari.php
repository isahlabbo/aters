<?php
namespace App\Services\PollingUnit\Shagari;
/**
* this class will return the array of its polling unit
*/
class Shagari
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'SHIYAR MAGAJI ‐ SHIYAR SHAGARI',
			'SHIYAR BIRNI ‐ SHAGARI',
			'G.S.S SHAGARI',
			'CHOFAL',
			'KAURA/SHIYAR HAKIMI',
			'WANKE ‐ MASALLACI',
			"WANKE MPS (WANKE MAKERA)",
			'MARAKE MODEL PRI.SCHOOL',
			"DAN HILI (GADAR S/HAKIMI)",
			"HAURA ‐ PRI.SCHOOL",
			'TUNGAR BAWA ‐ SHIYAR HAKIMI',
			"MPS JANZOMO (JANZOMO)",
			"MPS SAGE (SAGE SAGE/FILI)",
			'SHAGARI J.S.S',
		];
	}
}
