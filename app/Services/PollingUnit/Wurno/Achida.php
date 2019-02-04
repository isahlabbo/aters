<?php

namespace App\Services\PollingUnit\Wurno;
/**
* this class will retun the polling unit of class
*/
class Achida
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'MAKARANTA/MAKARANTA I',
			'KASUWA/KASUWA',
			'KANWURI/KANWURI I',
			'MARINAWA/MARINAWA',
			'YARKARO',
			'SHIYAR AJIYA/SHIYAR AJIYA',
			'MAKARANTA/MAKARANTA II',
			'KANWURI/KANWURI II',
			'S/MAGINA‐MARNAWA'
		];
	}
}