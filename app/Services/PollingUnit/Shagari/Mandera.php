<?php
namespace App\Services\PollingUnit\Shagari;
/**
* this class will return the array of its polling unit
*/
class Mandera
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'MANDERA ‐ SHIYAR AJIYA',
			'MPS MANDERA (SHIYAR ZARUMAI)',
			'HAUSARE ‐ SHIYAR HAKIMI',
			'DARIN GURU ‐ SHIYAR HAKIMI',
			'DARIN GURU ‐ SHIYAR YAMMA',
			'MPS GIDAN TUDU (GIDAN TUDU S/GABAS GARKAR MAIGARI)',
			'GIDAN TUDU ‐ SHIYAR SABINI BIRNI',
			'GIDAN BUHARI',
			'DARHAMAN',
			'SEBORE',
			'GIDAN GAYYA'
		];
	}
}
