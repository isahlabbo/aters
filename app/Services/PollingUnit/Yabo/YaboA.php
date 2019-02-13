<?php
namespace App\Services\PollingUnit\Yabo;
/**
* 
*/
class YaboA
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected  function pollingUnits()
	{
		return [
            'PRIMARY SCHOOL MALBAZA (SHIYAR FEGIN RAFI/S/FAWA)',
			'WC WC WAKI/G/LIMAN (SHIYAR UBANDAWAKI)',
			'ON THE ROAD DANHILI (SHIYAR MAGAJI/G/S/MUZA)',
			'ADDAM VILLAGE PRIMARY SCHOOL (SHIYAR SARKIN DUTSE)',
			'PRIMARY SCHOOL MAZAREN GABAS (MAZAREN GABAS/ G / HAKIMI)',
			'BULLA GAS / P/S',
			'BABBAN RUMJI PRY SCH',
			'MAZAREN YAMMA/GARKAR HAKIMI',
			'(ADDAM SHIYAR HAKIMI) SMALL MARKET YAR KASUWA',
			'SHIYAR FEGIN RAFI / J.N.I P/S',
		];
	}
}