<?php
namespace App\Services\PollingUnit\SabonBirni;

/**
* this class return the array of polling unit of the class
*/
class UnguwarLalle
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'Y. C KANWURI',
			'SHIYAR GAWO',
			'RIMAWA',
			'MARINA ‐ MARINA',
			'MASHAYA ‐ MASHAYA',
			'TURTSAWA ‐ TURTSAWA',
			'SABON SARA ‐ SABON SARA',
			'MAZAU',
			'MALLAMAWA ‐ MALLAMAWA',
			'MAGARAU ‐ MAGARAU',
			'KIRATAWA',
			'TAGIRKE',
			'SANGERAWA',
			'GIDAN GADO',
			'GAYYA DA KWARI',
			'TAMIN DAWA ‐ TAMIN DAWA',
			'BUDDARAWA ‐ BUDDARAWA',
			'ALUMUDAWA ‐ ALUMUDAWA'
		];
	}
}