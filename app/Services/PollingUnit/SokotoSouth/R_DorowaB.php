<?php

namespace App\Services\PollingUnit\SokotoSouth;
/**
* this class will return the pollin unit of the class
*/
class R_DorowaB
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
            'TUNAU MAFARA I',
			'TUNAU MAFARA II',
			'GARKI MOYI KAURA',
			'SALIHU ANKA I',
			'SALIHU ANKA II',
			'ILLELA H/SURUWA I',
			'ILLELA H/SURUWA II',
			'GOVT.HOUSE',
			'GARKA ZARUMI',
			'GARKAR AMADU GURZAU I',
			'GARKAR AMADU GURZAU II',
			'ALH BAKALE',
			'GARKA ZUBAIRU TELA',
			'P AND T I',
			'P AND T II',
			'WALIN SOKOTO',
			'BATH ROAD',
			'ORPHANAGE',
			'SHEIK GUMMI I',
			'SHEIK GUMMI II',
			'MAIKAHON KARO. I',
			'MAIKAHON KARO. II',
			'GARKA MALAM ABI',
			'KASUWAR RIJIYA I',
			'WURIN YAN NAMA',
			'CITY CAMPUS I',
			'CITY CAMPUS II'
		];
	}
}