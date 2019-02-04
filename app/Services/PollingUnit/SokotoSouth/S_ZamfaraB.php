<?php

namespace App\Services\PollingUnit\SokotoSouth;
/**
* this class will return the pollin unit of the class
*/
class S_ZamfaraB
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'GARKI BABAN LADI',
			'GARKI BOYI DANJATAU',
			'GARKI KABO YARSHARU I',
			'GARKI KABO YARSHARU II',
			'SOKOTO NIZZAMIYA PRI.SCHOOL I',
			'SOKOTO NIZZAMIYA PRI.SCHOOL II',
			'GARKI ALU SHAWA I',
			'GARKI ALU SHAWA II',
			'GARKI MAI UNGUWA ATTO I',
			'GARKI MAI UNGUWA ATTO II',
			'NOTHERN CINEMA',
			'GARKI SHUGABA DUZU',
			'GARKI HALIRU BINJI',
			'TALATU YARMAIGORO I',
			'TALATU YARMAIGORO II',
			'GARKAR BALA YAWURI',
			'HABSATU GIRLS COLLEGE',
			'MODI YABO TSOHO I',
			'MODI YABO TSOHO II',
			'SARKIN ZAMFARA UBA',
			'SARKIN ZAMFARA UBA',
			'SARKIN ZAMFARA YUSIF D/HAUSA J.ALLIEN/LAFIYA HOTEL I',
			'SARKIN ZAMFARA YUSIF D/HAUSA J.ALLIEN/LAFIYA HOTEL II',
			'SARIKIN ZAMFARA LAFIYA HOTEL B/WAY/N.U.R.T.W',
			'LAFIYA HOTEL II',
			'N.U.R.T.W I',
			'N.U.R.T.W II',
			'KAITA YABO I',
			'KAITA YABO II',
			'SARIKIN ZAMFARA GARKA IGEN JOJI',
			'GARKAR‐BARKI'
		];
	}
}