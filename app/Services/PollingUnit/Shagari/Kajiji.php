<?php
namespace App\Services\PollingUnit\Shagari;
/**
* this class will return the array of its polling unit
*/
class Kajiji
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'MPS KAJIJI BAKIN TITI (SHIYAR SANNA)',
			'DAN HILI (SHIYAR AJIYA GAMAGIRA)',
			'MPS GAMAGIRA (SHIYAR AJIYA)',
			'MPS KESOJE (KESOJE S/HAKIMI)',
			'KESOJE ‐ PRI.SCHOOL',
			'AGGUR ‐ SHIYAR HAKIMI',
			'MPS TUDUN SHIFKAU (TUDUN SHIBKAU SHIYYAR HAKIMI)',
			'BABUJE MPS BABUJE (GIDAN DAN GARA)',
			'GIDAN DANGARA ‐SHIYAR HAKIMI',
			'LAFIYAR BATURE ‐ PRI.SCHOOL',
			'BUSAWA TASHAR KAJIJI',
			'(MPS ASARARA ASARARA S/HAKIMI)',
			'RUGGA PRI SCHOOL',
			'KAJIJI‐J.S.S'
		];
	}
}
