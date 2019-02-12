<?php

namespace App\Services\PollingUnit\Silame;

/**
* this class will return the polling units of all the 
*/
class MarafaEast
{
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return[
			'PRIMARY SCHOOL GUNKIN MAGAJI (GIDAN MAGAJI)',
			'PRIMARY SCHOOL DANJAWO (DANJAWO/SHIYAR HAKIMI)',
			'KARANGIYA/SHIYAR HAKIMI',
			'MARAFA/ADULT EDUCATION OFFICE',
			'PRIMARY SCHOOL MARGAI (MARGA/SHIYAR HAKIMI)',
			'PRIMARY SCHOOL GUNGU (GUNGU/SHIYAR HAKIMI)',
			'GIDAN GERO/SHIYAR HAKIMI'
		];
	}
}