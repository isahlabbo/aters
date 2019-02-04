<?php
namespace App\Services\PollingUnit\Yabo;
/**
* 
*/
class YaboB
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected  function pollingUnits()
	{
		return [
            'DESPENSARY SHIYAR AJIYA (SHIYAR AJIYA GARKAR SARKI)',
			'SHIYAR WAMBAI WAMBAI P/S',
			'ROAD SIDE DAN HILI BAICHE / HAKIMI (BAICHE / HAKIMI)',
			'ROAD SIDE DAN HILI BAICHE/ MASALLACI (BAICHE/ MASALLACI)',
			'BAWARE/GARKAR HAKIMI',
			'KAURA/KAURA PRI.SCHOOL',
			'SHIYAR AJIYA MPS YABO',
			'SHIYAR HAKIMI/RUGGAR KAMBU/G/HAKIMI',
		];
	}
}