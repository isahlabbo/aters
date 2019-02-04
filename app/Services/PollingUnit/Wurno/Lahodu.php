<?php

namespace App\Services\PollingUnit\Wurno;
/**
* this class will retun the polling unit of class
*/
class Lahodu
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}
	protected function pollingUnits()
	{
		return [
			'LAHODU',
			'KAU RARE',
			'MAHICHI/MAHICHI',
			'GIDAN MAGAJI',
			'GIDAN BANGO',
			'BARNAWA',
			'SHIYAR GALADIMA',
			'GIDAN ISA',
			'BADAWA/BADAWA',
			'KAURAR GABAS',
			'RUGGA',
			'DABAGI/DABAGI KANWURI',
			'GIDAN MODI'
		];
	}
}