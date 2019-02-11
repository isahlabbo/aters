<?php

namespace App\Services\PollingUnit\Wamakko;
/**
* this class will reurn polling units of this class
*/
class Gwamatse
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'DANKYAL',
			'AN OPEN SPACE (DIDDIBA)',
			'UNDER MONGO TREE (GIDAN KADUNA)',
			'GWAMATSE',
			'REWA (HUCHI)',
			'ALONG THE ROAD SIDE (KURUN GUHU)',
			'BEFORE DISTRIC HEAD HOUSE (LAGAU)',
			'SAMALU PRY SCH',
			'PRIMARY SCHOOL (SAMALU SH. HAKIMI)',
			'AN OPEN SPACE (YARTUNGA)',
			'ACON THE ROAD SIDE (FAKARA)',
			'PRIMARY SCHOOL (GWAMATSE HAKIMI)'
		];
	}
}