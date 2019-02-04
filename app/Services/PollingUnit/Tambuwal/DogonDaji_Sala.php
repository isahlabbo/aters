<?php

namespace App\Services\PollingUnit\Tambuwal;
/**
* this class will return polling unit of this class
*/

class DogonDaji_Sala
{
	function __construct()
	{
	    $this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'SHIYAR DANGALADIMA ‐ MPS',
			'SHIYAR DANGALADIMA ‐ DANHILI',
			'DANGARAWA ‐ DANHILI',
			'SHIYAR TURUKKA ‐ G/TURUKKA',
			'RUGGAR SHAUDA ‐ DANHILI',
			'SHIYAR S/FAWA ‐ YARDOTSI',
			'KAURA/BABAN IDI‐KAURA KANWURI',
			'MAI KADE ‐ MAIKADE MPS',
			'KWALKWATO‐KWALKWATO M.P.S.',
			'GAMBU/BADUSAI ‐ GAMBU DANHILI',
			'NASARAWA ‐ DANHILI',
			'SALAH SHIYAR MAGAJI ‐ KWANKWARA',
			'SALAH SHIYAR M.DIKKO ‐ MPS',
			'SALAH SHIYAR M.DIKKO ‐DANHILI',
			'SHIYAR FADAMA/RAFI ‐ SHIYAR UBANDOMA',
			'ILLELA/CHANGWAL‐ILLELA PRI. SCH.',
			'BANCHO KERE ‐ MPS BANCHO',
			'MANA ‐ MANA DANHILI',
			'SHIYAR TAMBARI D/DAY‐ GIDAN RUWA',
			'SAMMA ‐ SAMMA D/HILI',
			'GANGUMMA'
		];
	}
}