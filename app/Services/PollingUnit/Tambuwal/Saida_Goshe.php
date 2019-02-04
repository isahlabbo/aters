<?php

namespace App\Services\PollingUnit\Tambuwal;
/**
* this class will return polling unit of this class
*/

class Saida_Goshe
{
	function __construct()
	{
	    $this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'KUREBU/KOKOZA ‐ DANHILI KUREBU',
			'GARAM ‐ GARAM PRI.SCHOOL',
			'DUWATSU/KUTA ‐ RAFIN SANYI PRI.SCHOOL',
			'SAIDA/ILLELA ‐ SAIDA PRI.SCHOOL',
			'GAMBUWA ‐ GAMBUWA PRI.SCHOOL',
			'GUDUM ‐ GUDUM PRI.SCHOOL',
			'TSIWA/GIDAN BUDI ‐ TSIWA DANHILI',
			'GOSHE/GIDAN ZABARMA ‐ GOSHE PRI.SCHOOL',
			'CIRIYAJE ‐ CIRIYAJE PRI.SCHOOL',
			'BUWADE ‐ BUDAWE PRI. SCH',
			'TAMDAMARE ‐ TAMDAMARE PRI.SCHOOL',
			'INWALA/IKKO GARI ‐ DANHILI INWALA',
			'RAREMA/BANGI ‐ DANHILI RAREMA'
		];
	}
}