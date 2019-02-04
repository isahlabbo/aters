<?php

namespace App\Services\PollingUnit\Tureta;
/**
* this class will return all polling units of the class
*/
class Duma
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'BOKA HAMMADAWA ‐ BOKA HAMMADAWA I',
			'BOKA HAMMADAWA ‐ BOKA HAMMADAWA II',
			'DUMA ‐ PRI.SCHOOL',
			'PRIMARY SCH. (DUMA BAKIN KASUWA)',
			'GIDAN YAUSI ‐ GIDAN YUS I',
			'WANTERE',
			'WUMUMU ‐ WUMUMU'
		];
	}
}
