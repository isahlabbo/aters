<?php

namespace App\Services\PollingUnit\Tangaza;
/**
* this class will return the polling units of the class
*/
class Magonho
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'MAGONHO ‐ PRI. SCHOOL',
			'SANYINNA ‐ PRI. SCHOOL',
			'KWALAJIYA ‐ DANFILI',
			'KWAIFA ‐ DAN FILI',
			'ALIYA HAUSAWA ‐ DANFILI',
			'GONGONO ‐ PRI.SCHOOL',
			'TUNGAR YALLI ‐ DANFILI',
			'TAKKAU ‐ PRI.SCHOOL',
			'DAN KUZUT ‐ DAN FILI',
			'JIGO ‐ SHIYAR HAKIMI',
			'GINJO ‐ DISPENSARY',
			'WAYAGE ‐ PRI.SCHOOL',
			'TAKKAU ‐ DISPENSARY'
		];
	}
}