<?php
namespace App\Services\PollingUnit\Yabo;
/**
* 
*/
class Fakka
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected  function pollingUnits()
	{
		return [
            'SHIYAR SARKIN BURMI FAKKA',
            'TRANSFORMER SABON GARI (FAKKA SHIYAR ABN GAI)',
			'DARUL DELBEGIYA (NEM TREE) (SHIYAR SHAMAKI)',
			'LAYI (RUGGAR KAYA)',
			'PRIMARY SCHOOL [GIDAN RUWA] (SHIYAR FADA UDUREGA)',
			'YAR MADALISA (SHIYAR AJIYA GUDUREWA)',
			'KOYO/ KOYO PRIMARY SCHOOL (KOYO SHIYAR HAKIMI)',
			'PRIMARY SCHOOL SIRE (BIRNIN USMAN)',
			'KWAKWANAWA (KWAKWANAWA/FAKA)'
		];
	}
}