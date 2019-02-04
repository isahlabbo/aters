<?php
namespace App\Services\PollingUnit\Yabo;
/**
* 
*/
class Kilgori
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected  function pollingUnits()
	{
		return [
            'NIZAMIYYA KILGORI',
			'KILGORI/MODEL PRI.SCHOOL KILGORI',
			'KWAIDAZADIKKO / KWAIDAZA MARAFA',
			'DAGEL / KAURA DAGEL / MARAFA',
			'ALKAIJE',
			'ZAGE/KURINGA',
		];
	}
}