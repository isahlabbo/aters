<?php

namespace App\Services\PollingUnit\Tureta;
/**
* this class will return all polling units of the class
*/
class BarayarGiwa
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'BARAYAR GIWA ‐ BARAYAR GIWA',
			'BIRISAWA ‐ BIRISAWA',
			'DAN GULBI',
			'MALL AMJI'
		];
	}
}
