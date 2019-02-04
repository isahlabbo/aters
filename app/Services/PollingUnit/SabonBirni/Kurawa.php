<?php
namespace App\Services\PollingUnit\SabonBirni;

/**
* this class return the array of polling unit of the class
*/
class Kurawa
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'PRI‐SCH (SHIYAR MALUNFASHI)',
			'CLINIC SABON‐GARI‐TASHA (SABON GARI‐TASHA)',
			'SHIYAR SARKI',
			'SARKIN RAFI',
			'GARKI',
			'DAN ‐ ADUWA',
			'MASALLACI ‐ MASAWA',
			'KWATSAL',
			'MASAWA DABUGI',
			'KWAREN GAMBA',
			'DAKWARO',
			'DOGON MARKE',
			'KUZARI',
			'SHIYAR SARKIN RAFI'
		];
	}
}