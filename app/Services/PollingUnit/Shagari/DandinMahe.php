<?php
namespace App\Services\PollingUnit\Shagari;
/**
* this class will return the array of its polling unit
*/
class DandinMahe
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'SHIYAR MAGAJI MAMMAN/DANDIN MAHE',
			'SHIYAR MAGAJI BAWA',
			'SHIYAR GALADIMA',
			'HELMOWA RUNBUKI M.P.S (HELMOWO RUNBUKI)',
			'R/AKALI / SESSEDA',
			'MABERA, GIDAN SALAU',
			'MP.S. RUGGAR MALAM (RUGGAR MALAM SHIYYAR MAGAJI)',
			'KWACIYO / LAKATI',
			'GINGA KANWURI MAIDABO',
			'GINGA MPS',
			'ZANGO / KAURARE',
			'ASARARA MPS (ASARARA)',
			'RUGGAR MAGAJI PRIMARY SCHOOL (RUGGAR MAGAJI)',
			'GWANAI MPS GWANAI. (GWANAI)',
			'MPS GWAMMANAI (GWAMMANAN R/YAMMA)',
			'DAN HILI (MANAJI R/ FAKO GARKAR HAKIMI)',
			'(DAN HILI (GIDAN MAGANA GARKAR HAKIMI)',
			'DAN HILI (ILLELA /ERA KANWURI)'
		];
	}
}
