<?php

namespace App\Services\PollingUnit\SokotoSouth;
/**
* this class will return the pollin unit of the class
*/
class S_ZamfaraA
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'TAKALMAWA I',
			'TAKALMAWA II',
			'UNGUWAR MALAMMAI I',
			'UNGUWAR MALAMMAI II',
			'MARINAR KOFAR ATIKU I',
			'MARINAR KOFAR ATIKU II',
			'KOFAR ATIKU MAI UNGUWA I',
			'KOFAR ATIKU MAI UNGUWA II',
			'OFISHIN HAKIMI I',
			'OFISHIN HAKIMI II',
			"MUH'D ZAKO",
			'ABDU SHUGABA',
			'WURIN YAN SUSU',
			'BALARBABA GWAMNA I',
			'BALARBABA GWAMNA II',
			'GALADIMA D/DURUMI'
		];
	}
}