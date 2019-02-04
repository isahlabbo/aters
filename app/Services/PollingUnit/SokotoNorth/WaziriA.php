<?php

namespace App\Services\PollingUnit\SokotoNorth;
/**
* this class will return polling Units of the class
*/
class WaziriA
{
	
	function __construct()
	{
		$this->pollingUnits = $this->PollingUnits();
	}

	public function pollingUnits()
	{
		return [
			'BEHIND GIGINYOYI CEMENTARY GARKAR ATTAH (GARKAR ATTA)',
			'TUDUN YOLA M.P.S ADMIN BLOCK (SAHARA DANBABA I)',
			'TUDUN YOLA M.P.S NEWLY RENOVATED BLOCKS (SAHARA DANBABA II)',
			'SH DANBUWA',
			'SH/ISAH TSALIBAWA I',
			'SH/ISAH TSALIBAWA II',
			'ALHAJI ALHAJI MODEL PRIMARY SCHOOL (GIDAN HUSSAINI BAZZA)',
			'SULTAN MACCIDO PRIMARY SCHOOL (GIDAN LUMU TSOHUWAR KASUWA)',
			'SULTAN MACCIDO PRI.SCHOOOL I',
			'SULTAN MACCIDO PRI.SCHOOOL II',
			'GIDAN MAIRABAH I',
			'GIDAN MAIRABAH II',
			'GIDAN DANKADO',
			'GOVTMENT DAY SECONDARY SCHOOL KOFAR MARKE (OFFISHIN HAKIMI)',
			'GIDAN IYAKA'
		];
	}
}



