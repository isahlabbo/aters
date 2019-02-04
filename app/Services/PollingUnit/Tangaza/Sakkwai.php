<?php

namespace App\Services\PollingUnit\Tangaza;
/**
* this class will return the polling units of the class
*/
class Sakkwai
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'SJIYAR DANGALADIMA ‐ PRI.SCHOOL',
			'SHIYAR AJIYA DIPSENSARY',
			'SHIYAR MAGAJI DAN FILI',
			'NKURU ‐ PRI.SCHOOL',
			'KANDAM ‐ DISPENSARY',
			'ALKASUM ‐ PRI.SCHOOL',
			'GONGONO ‐ PRI.SCHOOL',
			'KAURAWO ‐ PRI.SCHOOL',
			'MULAWA ‐ DISPENSARY',
			'WASANNIYA ‐DISPENSARY',
			'MANO ‐ PRI.SCHOOL',
			'KAMBANA ‐ DISPENSARY',
			'MALGAM ‐ DISPENSARY',
			'TUKANDU DAN FILI',
			'KAWURI ‐ PRI.SCHOOL',
			'BWAGWAL'
		];
	}
}