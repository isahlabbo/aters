<?php
namespace App\Services\PollingUnit\SabonBirni;

/**
* this class return the array of polling unit of the class
*/
class Tagawa
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'PRI.SCHOOL ‐ SHIYAR MARAFA',
			'J.S.S ‐ SHIYAR MAGAJI I',
			'J.S.S ‐ SHIYAR MAGAJI II',
			'UNDER NEEM TREE GADE I (SHIYAR BAWA GADE I)',
			'UNDER NEEM TREE GADE II (SHIYAR BAWA GADE II)',
			'UNDER NEEM TREE MARAFA (SHIYAR MARAFA)',
			'DUNKAWA',
			'DANKURA',
			'GAMJI',
			'SANGERAWA ‐ SANGERAWA',
			'ARAGA',
			'DAMA',
			'PRI. SCH. GIDAN AHTANO (GIDAN AHATANO I)',
			'UNDER NEEM TREE GIDAN AHTANO (GIDAN AHATANO II)',
			'BURKUSUMA',
			'MAGIRA TUDU',
			'MAGIRA KWARE',
			'GYANGYADI',
			'KATSALLEN KADE',
			'TAKALMAWA ‐ TAKALMAWA',
			'ASHA BANZA',
			'MALLAMAWA'
		];
	}
}