<?php
namespace App\Services\PollingUnit\Shagari;
/**
* this class will return the array of its polling unit
*/
class Kambama
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'SABON GARI/SHIYAR MAGAJI ‐ PRI.SCHOOL/SHIYAR MAGAJI KANBAMA',
			'DAN HILI (SHIYAR DANGALADIMA)',
			'DAN HILI (MAZOJI MAGAJI GARKAR HAKIMI)',
			'M P.S. SULLUBAWA (SULLUBAWA GARKAR HAKIMI)',
			'RINAYE/SHIYAR TUDU',
			'M.P.S RINAYE (RINAYE SHIYAR HAKIMI)',
			'TUDUN SAMBERU',
			'GIDAN HUSAINI OPEN SPACE (GIDAN HUSAINI)',
			'GWARGAWO'
		];
	}
}
