<?php

namespace App\Services\PollingUnit\Tureta;
/**
* this class will return all polling units of the class
*/
class Tsamiya
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'GIDDIN BISHIYA GASRKAR HAKIMI GIDAN YARI OPEN SPACE I (GIDAN YARI I)',
			'GIDAN YARI ‐ PRI.SCHOOL I',
			'GIDAN YARI ‐ PRI.SCHOOL II',
			'GIDDIN BISHIYA GASRKAR HAKIMI GIDAN WALO OPEN SPACE II ((GIDAN WALO)',
			'TSAMIYA ASIBITI',
			'TSAMIYA KASUWA',
			'ZUGU‐ZUGU',
			'GIDAN DANGIWA PRI. SCHOOL'
		];
	}
}
