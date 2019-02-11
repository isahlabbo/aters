<?php

namespace App\Services\PollingUnit\Wamakko;
/**
* this class will reurn polling units of this class
*/
class Gumbi_Wajake
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'M.P.S BARKEJI ‐ BARKEJI',
			'SHIYAR HAKIMI GANDU',
			'SHIYAR HAKIMI GIDAN BADUWA',
			'SHIYAR HAKIMI GIDAN BOKA',
			'DISTRICT HEAD OFFICE GUMBI',
			'M.P.S GUMBI ‐ GUMBI',
			'SHIYAR HAKIMI WAJEKE',
			'M.P.S YARABBA ‐ YAR‐ABBA',
			'SHIYAR HAKIMI YARABBA',
			'SHIYAR HAKIMI GIDAN A'
		];
	}
}