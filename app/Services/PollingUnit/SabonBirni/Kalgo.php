<?php
namespace App\Services\PollingUnit\SabonBirni;

/**
* this class return the array of polling unit of the class
*/
class Kalgo
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'KALGO I MPS',
			'KALGO PRI.SEC (KALGO II DANFILI)',
			'SARDAUNA GABAS MPS',
			'PRI‐SCH (SARDAUNA YAMMA MASALLACI)',
			'TEKE MAIFULOTI',
			'DANGARI ‐ DANGARI',
			'ADAMAWA',
			'DUKKUMA',
			'TASHAR BAGARUWA',
			'GIDAN AUTA',
			'KUKA ‐ KUKA',
			'DANKARMAWA',
			'TSAURAWA'
		];
	}
}