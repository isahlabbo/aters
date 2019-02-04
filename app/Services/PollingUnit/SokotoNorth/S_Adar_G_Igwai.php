<?php

namespace App\Services\PollingUnit\SokotoNorth;

/**
* this class will return polling Units of the class
*/
class S_Adar_G_Igwai
{
	
	function __construct()
	{
		$this->pollingUnits = $this->PollingUnits();
	}

	public function pollingUnits()
	{
		return [
			'SH/MAIGORO ‐ SH/MAIGORO',
			'SH/ALIYU DIN GYADI',
			'NEAR MAGASAR NAMA (MAHOTAR/TATUMBI "A")',
			'MAHOTAR DANTATUMBI B YANSANDA',
			'UNIVERSITY QUARTERS ‐ UNIVERSITY QUARTERS',
			'SH/MAI MAN GYADA',
			'RUNJIN SARKI ‐ RUNJI SARKI',
			'SH/MALAM BELLO ‐ SH/MAL.BELLO',
			'KASHIN KADANGARE MODEL PRIMARY SCHOOL (SHIYAR MAIKWABO)',
			'GIDAN SALIHU MODEL PRIMARY SCHOOL G/IGWAI (NURAWA GIDAN FADAMA)',
			'RUGGAR GERO',
			'GIDAN KUKA',
			'OFFISHIN HAKIMI UMARU'
		];
	}
}
