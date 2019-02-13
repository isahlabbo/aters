<?php

namespace App\Services\PollingUnit\Wamakko;
/**
* this class will reurn polling units of this class
*/
class Wamakko
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'SHIYAR HAKIMI BOYEN DUTSI',
			'M.P.S BOYEN MARI ‐ BOYEN MARI‐MARI',
			'SHIYAR HAKIMI GIDAN JADJI',
			'SHIYAR HAKIMI GIDAN BAZANFARE',
			'M.P.S MANKERI ‐ MANKERI',
			'SHIYAR HAKIMI TUNGAR MAGAJI',
			'LEPROSIUM OFFICE WAMAKKO',
			'SHIYAR BARADE WAMAKKO'
		];
	}
}