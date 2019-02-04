<?php
namespace App\Services\PollingUnit\SabonBirni;

/**
* this class return the array of polling unit of the class
*/
class S_BirniWest
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'VIEWING CENTRE ‐ SHIYAR YAKUBA',
			'KOFAR NA SORO ‐ SHIYAR MAGAJI',
			'YAN‐AWAKI PRI.SCHOOL‐ SHIYAR DAN‐BAKI I',
			'YAN‐AWAKI PRI.SCHOOL‐ SHIYAR DAN‐BAKI II',
			'MATERNITY ‐ SHIYAR DAN‐ILAH I',
			'MATERNITY ‐ SHIYAR DAN‐ILAH II',
			'TSAMIYAR AGUJE ‐ SHIYAR DAN GALADIMA I',
			'TSAMIYAR AGUJE ‐ SHIYAR DAN GALADIMA II',
			'HANDE PRI.SCHOOL ‐ SHIYAR UBANDAWAKI',
			'GIDAN DAWAI ‐ GIDAN DAWAI',
			'MAGAJIN DAWAKI‐MAGAJIN DAWAKI',
			'TOWN MODEL PRI.SCHOOL ‐ SHIYAR YAKUBU',
			'GOVERNMENT LODGE ‐ SHIYAR MALLAN KADA',
			'TSAMIYA KASUWA ‐ SHIYAR MAGAJI I',
			'TSAMIYA KASUWA ‐ SHIYAR MAGAJI II',
			'WOMEN CENTRE ‐ SHIYAR DANGALADIMA',
			'G.S.S S/BIRNI TEMGRAND'
		];
	}
}