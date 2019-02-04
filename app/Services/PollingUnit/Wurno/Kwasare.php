<?php

namespace App\Services\PollingUnit\Wurno;
/**
* this class will retun the polling unit of class
*/
class Kwasare
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}
	protected function pollingUnits()
	{
		return [
			'SHIYAR DANBARARA',
			'SHIYAR UBAN DAWAKI',
			'GUNTU GIDA/GUNTU GIDA',
			'TUDUN MALLAME',
			'ADARAWA',
			'SHIYAR SISAWA',
			'YARLABE',
			'GUMBORAWA',
			'GIDAN FAKO',
			"SHIYAR DAN BARARA/SHIYAR DANBARARA 'B'"
		];
	}
}