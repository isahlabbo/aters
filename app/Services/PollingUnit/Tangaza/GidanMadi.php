<?php

namespace App\Services\PollingUnit\Tangaza;
/**
* this class will return the polling units of the class
*/
class GidanMadi
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'SHIYAR HAKIMI ‐ PRI.SCHOOL I',
			'SHIYAR DANGALADIMA ‐ ISLAMIYA SCHOOL',
			'SHIYAR MAI UNGUWA ‐ DANFILI I',
			'SARAKU/FALALE ‐ DANFILI',
			'GIDAN DADI ‐ BAKIN KASUWA',
			'TSALIBAWA ‐ DANFILI',
			'GIDAN MALLAM ‐ PRI.SCHOOL',
			'SURUN GIYAL DANFILI',
			'SHIYAR MAI UNGUWA ‐ DANFILI II',
			'SHIYAR HAKIMI ‐ PRI.SCHOOL II'
		];
	}
}