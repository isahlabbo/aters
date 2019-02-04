<?php

namespace App\Services\PollingUnit\Tangaza;
/**
* this class will return the polling units of the class
*/
class RuwaWuri
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'RUWA WURI ‐ PRI.SCHOOL I',
			'RUWA WURI ‐ PRI.SCHOOL II',
			'TSONI GABAS ‐ PRI.SCHOOL',
			'DANFILI SARMA KWALLUWA (SARMA KWALLUWA/SHIYAR HAKIMI)',
			'SARMA TUDU ‐ PRI.SCHOOL',
			'TUNI GARA ‐ PRI.SCHOOL',
			'TUNI GARA ‐DANDFILI',
			'SABIYO ‐ PRI.SCHOOL I',
			'GWARGAWO ‐ SHIYAR HAKIMI',
			'BAGIDA, PRI.SCHOOL',
			'DANFILI SHIYAR HAKIMI (SAMAR MALGATAWA‐SHIYAR HAKIMI)',
			'RUWA WURI ‐ PRI.SCHOOL III',
			'SABIYO ‐ PRI.SCHOOL II'
		];
	}
}