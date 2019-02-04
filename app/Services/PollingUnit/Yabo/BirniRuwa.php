<?php
namespace App\Services\PollingUnit\Yabo;
/**
* 
*/
class BirniRuwa
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected  function pollingUnits()
	{
		return [
            'PRIMARY SCHOOL RUNGUMI/BIRNINRUWA (BIRNIN RUWA GARKA HAKIMI)',
			'BIRNIN RUWA/DOGOYI/RUNGUMI',
			'GIDAN BASA/RINAYE/MANAWA',
			'KANFATARE',
			'BIRSAWA/DALIJEN',
			'KUMA TOYI BARADE / KUMATOYI MAIYAKI'
		];
	}
}