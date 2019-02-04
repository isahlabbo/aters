<?php

namespace App\Services\PollingUnit\Tangaza;
/**
* this class will return the polling units of the class
*/
class Salewa
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'SALEWA ‐ PRI.SCHOOL',
			'ZURMUKU ‐ DISPENSARY',
			'BAUNI ‐ DISPENSARY',
			'DANFILI (GWABRO SHIYAR HAKIMI)',
			'CHEKEHE ‐ PRI.SCHOOL',
			'KYENGA ‐ DISPENSARY',
			'BAUNI ‐ DANFILI'
		];
	}
}