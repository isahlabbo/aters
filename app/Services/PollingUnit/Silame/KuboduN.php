<?php

namespace App\Services\PollingUnit\Silame;

/**
* this class will return the polling units of all the 
*/
class KuboduN
{
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return[
            'KUBODUN SAMA/MODEL PRI.SCHOOL KUBODU',
			'PRIMARY SCHOOL KUBODUN (KUBODUN KASA / MODEL PRIMARY SCHOOL)',
			'FAKARA BUDA/MODEL PRI.SCHOOL',
			'SHABRA BUNARI TOWN FIELD',
			'SHABRA ALKALI/MODEL PRI.SCHOOL',
			'KUBODUN SAMA/PRI.SCHOOL'
		];
	}
}