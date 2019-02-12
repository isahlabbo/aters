<?php

namespace App\Services\PollingUnit\Silame;

/**
* this class will return the polling units of all the 
*/
class KatamiNorth
{
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return[
			'SHIYAR MAGAJI',
			'SHIYAR TASALYA TRANSFORMER GARKAR ILIYA HAKIMI (SHIYAR TASALYA)',
			'FILIN NA’AKKA FAMFO HIP (SHIYAR TASALYA/FILIN NAAKKA)',
			'PRIMARY SCHOOL RAIRAN FULANI (GIDAN MAGAJI)',
			'PRIMARY SCHOOL GUJIYA (GUJIYA GIDAN MAGAJI)',
			'PRIMARY SCHOOL TUNGAR DADI/ (TUNGAR DADI GARKAR HAKIMI)',
			'TUNGAR ATTO/GIDAN HAKIMI',
			'SHIYAR TASALYA/TSOHON KANWURI'     
		];
	}
}