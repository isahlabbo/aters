<?php

namespace App\Services\PollingUnit\Tambuwal;
/**
* this class will return polling unit of this class
*/

class Jabo_Kagara
{
	function __construct()
	{
	    $this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'SHIYAR SARKI A ‐ GIDAN RUWA',
			'SHIYAR SARKI B ‐ MODEL PRI.SCHOOL',
			'SHIYAR YAMMA ‐ J.N.I',
			'SHIYAR GALADIMA ‐ MUDALIA',
			'SHIYAR UBANDOMA ‐ DANHILI',
			'SHIYAR SIRE/S.PAWA ‐ G.ARDO',
			'GYARTAI ‐ PRI.SCHOOL',
			'SH.MAGAJI/S.PAWA ‐ DANHILI',
			'SAKANAU ‐ PRI.SCHOOL',
			'BINJI/GURAYE/R.BIYO ‐ GURAYE P/SCHOOL',
			'HILIYA/RUGGAR/GUMMI PRY SCH. HILIYA',
			'GUDUMAWA/COBAYA/G.MAGAJI‐DANHILI',
			'GESELODI/GUMASAFI/G.DILODI‐GESELODI P/SCHOOL',
			'BADARIYA/KAURARE ‐ DANHILIN BARDE',
			'CHAKAI/T‐BARKE ‐ DANHILI',
			'YOLE/MODI ‐ SH‐DASARA',
			'TABKI/GIDAN MANU ‐ DANHILI',
			'BALERA ‐ DANHILI TUDU',
		];
	}
}

