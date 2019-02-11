<?php

namespace App\Services\PollingUnit\Wamakko;
/**
* this class will reurn polling units of this class
*/
class G_Bubu_G_Yaro
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'M.P.S. DUTSIN MAJEMA',
			'UNDER THE TREE (HARGEZA DUTSE)',
			'PRIMARY SCHOOL HERGEZAR MARMARO (HARGEZA MARMARO)',
			'UNDER THE TREE (GIDAN BUBU)',
			'ALONG THE ROAD SIDE (GIDAN TUDU)',
			'MPS (GIDAN YARO)',
			'UNDER THE TREE GWANFARA ‐ DANGARA (GIWANFAR DANGARA)',
			'UNDER THE TREE GWANFAR GEBE (GWAMFAR GEBE))',
			'UNIVERSITY MAIN ROAD (KWALKWALAWA)',
			'ATAN OPEN SPACE (RUNJIN YAMMA)',
			'UNDER THE TREE SABON GARI (SABON GARI)',
			'ALONG THE ROAD SIDE (TUNGA)',
			'UNDER THE TREE (SAFATAWA)',
			'ROAD JUNCTION GIDAN ASARKI (GIDAN ASARKI)'
		];
	}
}