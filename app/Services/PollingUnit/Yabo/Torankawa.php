<?php
namespace App\Services\PollingUnit\Yabo;
/**
* 
*/
class Torankawa
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected  function pollingUnits()
	{
		return [
            'TORAKAWA SHIYAR LELABA',
			'PRIMARY SCHOOL NIZAMIYYA DISPENSARY (SHIYAR GALADIMA TORANKAWA)',
			'GAMMA/GAMA/GAMA‐GAMA',
			'BUL‐BULI/BUL‐BULI',
			'MUZA PRIMARY SCHOOL (MUZU/KUREBU)',
			'DAGWARGA DIKKO/DAGWARGA DIKKO',
			'DAGARGA/DAGWARGA UBANDAWAKI',
			'BAWA BISA/GIDAN GAMJI',
			'ICHEN KAIWA (GELA / TOFARKA)',
		];
	}
}