<?php

namespace App\Services\PollingUnit\Wamakko;
/**
* this class will reurn polling units of this class
*/
class K_Kimba_Gedawa
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'ASARI RUNJI',
			'DISPENSARY (ASARI ZAMFARA)',
			'UNDER THE TREE (BADDNOW GODORI)',
			'ALONG THE ROAD SIDE (BADDNONI KOKANI)',
			'ALONG THE ROAD SIDE (BOYEN KABAWA)',
			'AN OPEN SPACE (DARAYE BIRNI)',
			'UNDER THE TREE (DARAYE KAURA)',
			'ALONG THE ROAD SIDE (GEDAWA G. HAKIMI',
			'GOAWA PRIMARY SCHOOL (DEDEWA PRIMARY SCHOOL)',
			'UNDER THE GAWO TREE (GANO)',
			'SHIYAR HAKIMI MAIRUWA/GIDAN SHIFKAU',
			'UNDER MANGO TREE (DARAYE SUNKOBA)',
			'PRIMARY SCHOOL KAURA KIMBA (KAURA KIMBA)',
			'AT THE ROAD SIDE LAILABWA (LAILA BAWA)',
			'AN OPEN SPACE (LUGYYARE IBBI)',
			'UNDER GAWO TREE (LUNGUN RAFI)',
			'AN OPEN SPACE (MACIJIN ABDU)',
			'UNDER GAWO TREE (RUNJIN BIYU)',
			'BEFORE DISTRIC HEAD HOUSE (TUNGAL BASO)',
			'AN OPEN SPACE (WULURE)'
		];
	}
}