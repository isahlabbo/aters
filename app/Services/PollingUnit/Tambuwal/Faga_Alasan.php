<?php

namespace App\Services\PollingUnit\Tambuwal;
/**
* this class will return polling unit of this class
*/

class Faga_Alasan
{
	function __construct()
	{
	    $this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'SAMO ‐ YARKASUWA',
			'ALASAN BAICI ‐ DANHILI I',
			'ALASAN BAICI ‐ DANHILI II',
			'ALASAN ‐ PRI.SCHOOL',
			'ALASAN ‐ DANHILI MASALLACI',
			'FAGA ‐ PRI.SCHOOL',
			'YAULAWA ‐ DANHILI',
			'KOKORO ‐ KASUWA',
			'KOKORO UNGUWAR MARKE ‐ DANHILI',
			'KAURAR M‐SALIHU ‐ DANHILI',
			'BAGASAKKA/NABARI ‐ BAGASAKKA KASUWA'
		];
	}
}