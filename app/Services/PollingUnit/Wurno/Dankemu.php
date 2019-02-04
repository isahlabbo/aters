<?php

namespace App\Services\PollingUnit\Wurno;
/**
* this class will retun the polling unit of class
*/
class Dankemu
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}
	protected function pollingUnits()
	{
		return [
			'SHIYAR MAGAJI/SHIYAR MAGAJI',
			'SHIYAR WAKILI/ LAYIN KASUWA (SHIYAR WAKILI)',
			'WANU/GUNDU/ANZA',
			'MALLAMAWA/DANGIDA',
			'MAGAJI/ADAKANTA',
			'TAMBARA/SALUM',
			'PROJECT DABAGIN ISAA',
			'SIDINGO'
		];
	}
}