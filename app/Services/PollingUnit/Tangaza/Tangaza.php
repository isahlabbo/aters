<?php

namespace App\Services\PollingUnit\Tangaza;
/**
* this class will return the polling units of the class
*/
class Tangaza
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'SHIYAR DANGALADIMA ‐ PRI.SCHOOL I',
			'DAFILITANGAZA ON ROAD LEADING TO MARKET GIDANNAMADIMA (SHIYAR DANGALADIMA‐PRI.SCHOOL II)',
			'SHIYAR MAGAJI/NIZANIYA ‐ PRI.SCHOOL',
			'SHIYAR SIRA/KASUWA SIRA',
			'GARINSARKI / DANFILI (GARIN SARKI/SHIYARHAKIMI)',
			'GURDAN/BAKIN KASUWA',
			'BAIDI/DANFILI',
			'DANFILI (RUGGAR RUWA/SHAIYARHAKIMI)',
			'GOHONO / BAKINKASUWA (BILANGI/BAKIN KASUWA)',
			'GOHONO/PRI.SCHOOL',
			'LABSANI/PRI.SCHOOL',
			'GANDABA YAMMA/PRI.SCHOOL',
			'GURAMI/B/KASUWA',
			'SABRO/BAKIN RIJIYA',
			'BARKATUBE/BAKIN KASUWA',
			'AYAMA/PRI.SCHOOL',
			'SHIYAR DANGALADIMA PRI.SCHOOL III',
			'DANFILIN SHIYAR DANGALADIMA (SHIYAR DANGALADIMA PRI.SCHOOLVI)',
			'SHIYAR SIRA ‐ SHIYAR HAKIMI',
		];
	}
}