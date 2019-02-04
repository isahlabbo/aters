<?php

namespace App\Services\PollingUnit\Wurno;
/**
* this class will retun the polling unit of class
*/
class Kwargaba
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}
	protected function pollingUnits()
	{
		return [
			'SHIYAR DAN GALADIMA/KINARGABA',
			'DAN KOGI/KA WADATA / AKALAWA KINARGABA',
			'BARAYAR ZAKI/SHIYAR DAN GALADIMA',
			'ARBA RAFI/MAGAJI',
			'DABAGIN YARI/DABAGIN BASAU',
			'SABON GARIN DAJE',
			'LUGU SHIYAR MAGAJI',
			'LUGU SHIYAR RAFI',
			'TUTTUDAWA',
			'GIDAN MODI',
			'DANBASO',
			'SHIYAR DAN GALADIMA II KINARGABA II',
		];
	}
}