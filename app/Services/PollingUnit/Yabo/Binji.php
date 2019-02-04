<?php
namespace App\Services\PollingUnit\Yabo;
/**
* 
*/
class Binji
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected  function pollingUnits()
	{
		return [
            'BINJI SHIYAR YABO',
			'ALKAEJI PRIMARY SCHOOL (BINJI/S/ALKAEJI)',
			'BIRNIN BULDI/SHIYAR HAKIMI BULDI',
			'YAKANARE',
			'KIBIYARE',
			'TILEN GALABDU',
		];
	}
}