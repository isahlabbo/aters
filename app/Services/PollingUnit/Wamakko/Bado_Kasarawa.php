<?php

namespace App\Services\PollingUnit\Wamakko;
/**
* this class will reurn polling units of this class
*/
class Bado_Kasarawa
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
            'SHIYAR HAKIMI ADARAWA',
			'SHIYAR HAKIMI BADON BARADE',
			'NEAR WATER TANK BADO QTS',
			'SHIYAR RAFI BADON RAFI',
			'SHIYAR MAGAJI BADON RAFI',
			'M.P.S BINI ‐ BINI',
			'C.O.E CLINIC S.S.WE',
			'SHIYAR HAKIMI GANDUN ARDO',
			'T.V VIEWING CENTRE KASARAWA',
			'M.P.S KASARAWA ‐ KASARAWA',
			'SHIYAR HAKIMI KAURAN MAL.GARBA',
			'SHIYAR HAKIMI MAGANAWA',
			'SHIYAR HAKIMI NUFAWA',
			'A.B.A GATE I',
			'A.B.A GATE II',
			'SHIYAR HAKIMI RUNJIN GIDADO'
		];
	}
}