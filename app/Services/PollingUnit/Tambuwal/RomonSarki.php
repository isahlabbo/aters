<?php

namespace App\Services\PollingUnit\Tambuwal;
/**
* this class will return polling unit of this class
*/

class RomonSarki
{
	function __construct()
	{
	    $this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'ROMON SARKI ‐ YAR KASUWA',
			'ROMON SARKI KANTITI',
			'ROMON SARKI KANWURI',
			'ROMON SARKI PRI SCH.',
			'KAYA TSOHON KANWURI',
			'KAYA BARKIN SHAGO',
			'KAYA PRI. SCH',
			'KAYA SHIYAR GABAS',
			'KAYA SHIYAR YAMMA',
			"BARGA A' KANWURI",
			"BARGA B' DANFILI",
			'BARGA GARKAR LIMAN'
		];
	}
}