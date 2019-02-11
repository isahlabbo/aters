<?php

namespace App\Services\PollingUnit\Wamakko;
/**
* this class will reurn polling units of this class
*/
class Kalanbaina_Girabshi
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'M.P.S BAKINKUSU ‐ BAKIN KUSU',
			'MOBILE GATE ‐ MOBILE POLICE QTS.',
			'SHIYAR HAKIMI GIDAN FULANI',
			'SHIYAR HAKIMI GIRABSHI NORTH',
			'SHIYAR HAKIMI GIRABSHI SOUTH',
			'SHIYAR HAKIMI KALAMBAINA',
			'YARKULU MARKET SHIYAR MARAFA',
			'SHIYAR HAKIMI GANTSARE',
			'SHIYAR HAKIMI GIDAN GAMBA'
		];
	}
}