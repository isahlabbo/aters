<?php

namespace App\Services\PollingUnit\Silame;

/**
* this class will return the polling units of all the 
*/
class Silame
{
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return[
			'SHIYAR MARAFA/WOMEN CENTRE',
			'SHIYAR MARAFA/BURMAWA',
			'SHIYAR BUNU/M.P .SCHOOL',
			'SHIYAR BUNU/MARINA SILAME',
			'LAININKASA/PRI.SCHOOL LAINI',
			'DANKALA DIKKO/ TOWN FIELD',
			'DALMI/M.P.SCHOOL',
			'GYATTARANA/TOWN FIELD',
			'KAMASU/TOWN FIELD',
			'SHIYAR MARAFA/WOMEN CENTRE',
			'OLD DISPENSARY SHIYAR BUNU (SHIYAR BUNU / MPS)'
		];
	}
}