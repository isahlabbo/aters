<?php

namespace App\Services\PollingUnit\SokotoSouth;
/**
* this class will return the pollin unit of the class
*/
class R_DorowaA
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
            'ASSIBITIN KUTARE',
			'GARKA YAWO',
			'OFFISHIN HAKIMI I',
			'OFFISHIN HAKIMI II',
			'G DAN GOGGO',
			'G DAN LELE',
			'GARKAR HALI WANGARAWA',
			'G. MAI GWANDU',
			'MASALLACI N ADAMAWA',
			'KASUWA MARINA TSAMIYA I',
			'KASUWA MARINA TSAMIYA II',
			'GARKAR SARKIN TASHA I',
			'GARKAR SARKIN TASHA II',
			'GARKA MAIFADA',
			'GARKAR SARKIN KUDUN GASAU I',
			'G. DAN MAIRI',
			'GARKAR SARKIN KUDUN GUSAU II',
			'SPECIALIST HOSPITAL'
		];
	}
}