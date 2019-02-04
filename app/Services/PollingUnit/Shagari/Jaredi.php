<?php
namespace App\Services\PollingUnit\Shagari;
/**
* this class will return the array of its polling unit
*/
class Jaredi
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'JAREDI SHIYAR MAJIKIRA ‐ M.P.S',
			'MAJIKIRA MPS (JAREDI SHIYYAR MAGAJI)',
			'TSAFARI',
			'NAKUZU',
			'GINDIN BISHIYA (RUNJIN BUZU)',
			'RUGGAR GAMAU',
			'SIRE',
			'RUGGAR TUDU',
			'RUNTUWO',
			'LUDI'
		];
	}
}

