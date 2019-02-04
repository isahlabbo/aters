<?php
namespace App\Services\PollingUnit\SabonBirni;

/**
* this class return the array of polling unit of the class
*/
class S_BirniEast
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'PRI.SCHOOL ‐ TAKATSABA',
			'PRI.SCHOOL ‐ KYARA',
			'GARIN NAMAIMAI ‐ GARIN NAMAIMAI',
			'PRI.SCHOOL ‐ BACHAKA',
			'GARIN BUTA ‐ GADIN BUTA',
			'PRI.SCHOOL ‐ KALAGE',
			'PRI.SCHOOL ‐ GARIN ABARA I',
			'GARIN ABARI II CLINIC (PRI.SCHOOL‐GARIN ARABAII)',
			'PRI.SCHOOL ‐ MAIWA',
			'PRI.SCHOOL ‐ CHINABARKA',
			'SON‐ALLAH ‐ SON ALLAH',
			'PRI.SCHOOL ‐ DANKWARE',
			'PRI.SCHOOL ‐ GARIN UMARA',
			'DANGARI ‐ DANGARI',
			'SULMAWA ‐ SULMAWA',
			'PRIMARY SCHOOL TAKATSABA (TAKASABA MASALLACI)'
		];
	}
}

