<?php

namespace App\Services\PollingUnit\Wurno;
/**
* this class will retun the polling unit of class
*/
class Chacho
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}
	protected function pollingUnits()
	{
		return [
			'SHIYAR DANGALADIMA/KANWURI',
			'SHIYAR ARDO MAKARANTA',
			'ZANGON TUDU MAKARANTA',
			'GIDAN TUDU MAKARANTA',
			'MUNKI MAKARANTA',
			'SABON GARI RABA /KANWURI',
			'GAWO/KANWURI',
			'KADAGIWA/MAKARANTA',
			'TAMBAGARKA/KANWURI',
			'SHIYAR SARDAUNA/KASUWA',
			'SHIYAR USMAN/KANWURI',
			'KOLIYAL/KANWURI',
			'DABAGIN BUM/KANWURI',
			'SABON BIRNI/KAURAME KASUWA',
			'DIGIM/KANWURI'
		];
	}
}