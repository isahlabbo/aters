<?php

namespace App\Services\PollingUnit\Worno
/**
* this class will retun the polling unit of class
*/
class Dinawa
{
	
	function __construct()
	{
		$this->pollingUnits();
	}
	protected function pollingUnits()
	{
		return [
			'SHIYAR SARKIN YAKI',
			'SHIYAR TAWAGA',
			'GIDAN KORO VILLAGE',
			'SHIYAR SARKIN RAFI',
			'SHIYAR DOKA',
			'GANGU DABAGI'
		];
	}
}