<?php

namespace App\Services\PollingUnit\SokotoSouth;
/**
* this class will return the pollin unit of the class
*/
class T_WadaB
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'BAWA YAURI',
			'TUDUN WADA GARKA BAWA YAURI',
			'KOTUN GULMA I',
			'KOTUN GULMA II',
			'IBRAHIM DASUKI PRI.SCHOOL I',
			'IBRAHIM DASUKI PRI.SCHOOL II',
			'GOVT.PRINTING PRESS',
			'GARKA ALU ACHIDA I',
			'GARKA ALU ACHIDA II',
			'GARKI ALHAJI GARKA MAISHAYI',
			'GARKA MAISHAYI',
			'GARKA ALH.‐LABARAN I',
			'GARKA ALH.‐LABARAN II',
			'GARKA DAHIRU NGASKI I',
			'GARKA DAHIRU NGASKI II',
			'GARKA ALH.‐MAMMAN I',
			'GARKA ALH.‐MAMMAN II',
			'GARKA ALH.‐SAMBO',
			'GARKA MALAM MAI SHEHI I',
			'GARKA MALAM MAI SHEHI II',
			'TUDUN WADA GARKA SAIDU DAN SADAU',
			'IBRAHIM GASAU NIZAMIYYA I',
			'IBRAHIM GASAU NIZAMIYYA II',
			'WADA UBA DK I',
			'WADA UBA DK II',
			'NAGARTA COLLEGE',
			'ALI AKILU ROAD',
			'GARKAR MAIICCE I',
			'GARKAR MAIICCE II'
		];
	}
}