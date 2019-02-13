<?php

namespace App\Services\PollingUnit\Tambuwal;
/**
* this class will return polling unit of this class
*/

class Sanyinna
{
	function __construct()
	{
	    $this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'SHIYAR DUTSI ‐ AREA OFFICE',
			'WANZAMMAI ‐ PRI.SCHOOL',
			'BAICI S/GARI ‐ JNI PRI.SCHOOL',
			'SHIYAR MALLE ‐ DANHILI',
			'KOFAR YAMMA ‐ DISPENSARY',
			'KOFAR YAMMA ‐ DANHILI',
			'MAKERA ‐ MODEL PRI.SCHOOL',
			'SHIYAR TSIBIRI ‐ DANHILI',
			'SHIYAR FULANI ‐ DANHILI',
			'SABONGARI ‐ MAKARANTA MANUGA',
			'SHIYAR SAKKARAWA ‐ ADULT EDUCATION'
		];
	}
}
