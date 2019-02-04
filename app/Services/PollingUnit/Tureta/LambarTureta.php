<?php

namespace App\Services\PollingUnit\Tureta;
/**
* this class will return all polling units of the class
*/
class LambarTureta
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'LAMBAR TURETA ‐ PRI.SCHOOL I',
			'L/TURETA PRI. SCH. (LAMBAR TURETA PRI. SC II)',
			'LAMBAR TURETA ‐ ASIBITI',
			'GIDAN GAR KUWA ‐ GIDAN GARKUWA',
			'PRIMARY SCH. (KAMFANIN ALA)',
			'KAMFANIN DIYA ‐ KAMFANINDIYA',
			'TUDUN IYE ‐ TUDUN IYE',
			'LAMBAR TURETA ‐ G.S.S TURETA'
		];
	}
}
