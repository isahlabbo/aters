<?php
namespace App\Services\PollingUnit\Shagari;
/**
* this class will return the array of its polling unit
*/
class Lambara
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'LAMBARA ‐ MODEL PRI.SCHOOL',
			'LAMBARA ‐ SHIYAR KOFAR',
			'DAN HILI (ILLELA KAURA DABOR)',
			'DUWOJI/DALIJAN /DUNDEJI OPEN SPACE (DUWOJI/DALIJAN /DUNDEJI)',
			'GIDAN BAURA/ELA ‐ ELA',
			'MPS BADIYAWA (S/YAKI BADIYAWA)',
			'DORUWA ‐ DORUWA',
			'GIDAN TUDU/GIDAN ARDO‐SHIYAR ARDO',
			'BELA ‐ BELA',
			'MPS GIDAN MASKAYAU (GIDAN MASKAYAU)',
			'GIDAN BUNGA/ GARIN BUNGA',
			'GIDAN GAMBO ‐ GARIN GIDAN GAMBO',
			'JANDUTSI ‐ SHIYAR HAKIMI',
			'BAKYA ‐ GARIN BAKYA',
			'GULORU ‐ SHIYAR MAKERA'
		];
	}
}
