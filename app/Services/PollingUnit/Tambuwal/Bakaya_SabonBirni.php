<?php

namespace App\Services\PollingUnit\Tambuwal;
/**
* this class will return polling unit of this class
*/

class Bakaya_SabonBirni
{
	function __construct()
	{
	    $this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'BAKAYA ‐ BAKAYA PRI.SCHOOL',
			'BAKAYA ‐ SHIYAR RAFI ‐ GARKAR HAKIMI',
			'BAKAYA ‐ DANDINKOWU ‐ DANHILI',
			'RUGGAR FAKO ‐ DANHILI',
			'MADOCCI ‐ MADOCCI PRI.SCHOOL',
			'MADOCCI ‐ KANWUKI ‐ DANHILI',
			'ROMON LIMAN TITI ‐ ROMO PRI.SCHOOL I',
			'ROMON LIMAN TITI ‐ ROMO PRI.SCHOOL II',
			'ROMON LIMAN S/GALADIMA ‐ SCH. GALADIMA',
			'ROMON LIMAN S/WAZIRI ‐ SABON BIRNI PRI.SCH.',
			'IL0JI‐ GARKAR MAGAJI',
			'SABON BIRNI DANHILI'
		];
	}
}