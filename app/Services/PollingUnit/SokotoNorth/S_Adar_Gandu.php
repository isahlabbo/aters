<?php

namespace App\Services\PollingUnit\SokotoNorth;

/**
* this class will return polling Units of the class
*/
class S_Adar_Gandu
{
	
	function __construct()
	{
		$this->pollingUnits = $this->PollingUnits();
	}

	public function pollingUnits()
	{
		return [
			'MASSALACIN YARABAWA',
			'SH/ALH.ABDU ‐ HAJIYA HALIMA',
			'ABDUL NANI',
			'ALH. ADA MAIFATA',
			'SHIYAR MAI FADA',
			'OFFISHIN HAKIMI DANDARE',
			'FRANCE COMPANY I',
			'SOKOTO SCIENCE COLLEGE',
			'GANDU PRI.SCHOOL ‐ GANDU PRI.SCHOOL I',
			'GANDU PRI.SCHOOL ‐ GANDU PRI.SCHOOL II',
			"GANDU PRIMARY SCHOOL (GANDU PRI.SCHOOL ‐ GANDU PRI.SCHOOL III)",
			"KARAMAR KOFAR GAWO TA ‘YAN TSAMIYA (SHIYAR SARKIN BAKI)",
			'ALIYU MAIGISHIRI I',
			'ALIYU MAIGISHIRI II',
			'SH/SULE MAINAMA ‐ SH SULE MAINAMA',
			'BAYAN GIDAN MARSANDI A',
			'BAYAN GIDAN MARSANDI B',
			'GIDAN DARE',
			'ALIYU MAIGISHIRI III',
			"KANIKAWAN MASHIN KANTIN DAJI OPPOSITE HABASH YOUGHUT (FRANCE COMPANY II)"
		];
	}
}
