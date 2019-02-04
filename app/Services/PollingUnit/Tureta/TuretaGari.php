<?php

namespace App\Services\PollingUnit\Tureta;
/**
* this class will return all polling units of the class
*/
class TuretaGari
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'SHIYAR RAFI ‐ SHIYAR RAFI',
			'YARGARDAYE ‐ YARGARDAYE',
			'YAR KOFAR ‐ YARKOFA I',
			'YAR KOFAR ‐ YARKOFA II',
			'DANKORE ‐ DANKORE',
			'GIDAN SULE ‐ GIDAN SULE',
			'GANGAMAWA ‐ GANGAMAWA',
			'RAFIN BUDA ‐ RAFIN BUDA',
			'DUNDUFA ‐ DUNDUFA',
			'BELA ‐BELA'
		];
	}
}
