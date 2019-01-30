<?php

namespace App\Services\PollingUnit\Worno
/**
* this class will retun the polling unit of class
*/
class Magarya
{
	
	function __construct()
	{
		$this->pollingUnits();
	}
	protected function pollingUnits()
	{
		return [
			'MAGARY KAWURIN S/GOBOR',
			'SHIYAR BINDIGAWA/SHIYAR BINDIGAWA',
			'SHIYAR SARKIN RUWA/T.V CENTRE',
			'SHIYAR RAFI/SHIYAR RAFI',
			'SABON GARIN DOKA/SHIYAR DOKA',
			'SABON GARIN DOKA/SHIYAR DOKA (YARBUJE)'
		];
	}
}