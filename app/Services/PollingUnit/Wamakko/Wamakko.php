
<?php

namespace App\Services\PollingUnit;
/**
* this class will reurn polling units of this class
*/
class Wamakko
{
	
	function __construct(argument)
	{
		$this->pollingUnits();
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