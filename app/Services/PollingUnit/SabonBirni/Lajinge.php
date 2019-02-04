<?php
namespace App\Services\PollingUnit\SabonBirni;

/**
* this class return the array of polling unit of the class
*/
class Lajinge
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'PRI. SCHOOL ‐ LAJINGE I',
			'PRI. SCHOOL ‐ LAJINGE II',
			'PRI. SCHOOL ‐ DANTUDU I',
			'PRI. SCHOOL ‐ DANTUDU II',
			'PRI. SCHOOL ‐ LANJEGU I',
			'MARAKAWA DANFILI',
			'PRI. SCHOOL ‐ KADAYE',
			'PRI. SCHOOL ‐ JIJJIRA',
			'RUMBUKAWA KADUM ‐ RUMBUKAWA',
			'ALLAKIRU',
			'KUNGURUS ‐ KUNGURUS',
			'DANTUDU‐ DANTUDU'
		];
	}
}