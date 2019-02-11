<?php

namespace App\Services\PollingUnit\Wamakko;
/**
* this class will reurn polling units of this class
*/
class G_Hamidu_G_Kaya
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'DISPENSARY UNGUWAR RUWA (UNGUWAR RUWA)',
			'UNDER THE TREE GIDAN ALKALI (GIDAN ALKALI)',
			"PRIMARY SCHOOL GIDAN HABIBU I (GIDAN HABIBU 'A')",
			"DISPENSARY GIDAN HABIBU II (GIDAN HABIBU 'B')",
			'PRIMARY SCHOOL (GIDAN HAMIDU)',
			'ALONG THE ROAD SIDE (GIDAN KARO)',
			'PRIMARY SCHOOL (GIDAN KAYA)',
			'UNDER THE TREE (GIDAN YUMFA)',
			'OPEN SPACE RUGGAN KALGO (RUGGAR KALGO)',
			'UNDER THE TREE RUNJIN (RUNJIN GAZAU)',
			'ALONG THE ROAD SIDE YAURAWA (YAURAWA)',
			'UNDER THE TREE ZABARMAWA (ZABARMAWA)',
			'NEAR MOSQUE BAGAYAWA (BAGAYAWA)',
			'OPPOSITE MAIN ROAD MAIDAJI KASUWA (MAIDAJI KASUWA)',
			'UNDER THE TREE GIDAN SARKIN PAWA (GIDAN SARKIN FAWA)',
		];
	}
}