<?php
namespace App\Services\PollingUnit\Yabo;
/**
* 
*/
class Bingaje
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected  function pollingUnits()
	{
		return [
            'BENGAJE/TAGULE',
			'ROAD SIDE LAMBOGEL/BUSA (LAMBOEL/BUSSA)',
			'DONO/JAKIRI',
			'GWARGAWO/GWARGAWO FAIDAU KWAINO',
			'PRIMARY SCHOOL LABAS (LABAS/ CHENCHAMA)',
			'PRIMAY SCHOOL SABARA (SABARA/K/BARI)',
			'ADIGA/MAKERA, ADIGA'
		];
	}
}