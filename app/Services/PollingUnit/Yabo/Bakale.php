<?php
namespace App\Services\PollingUnit\Yabo;
/**
* 
*/
class Bakale
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected  function pollingUnits()
	{
		return [
            'BAKALE/BAKALE/RUGGAR YAUTA/DORAI',
			'DURAI PRIMARY SCHOOL (BAKALE YOTTA DURAI)',
			'ICHEN FARU (TUDUN BAKALE)',
			'TUDUN JADDA',
			'BAZAR/BAZAR',
			'SHABRA LOKOKO',
			'DANCHI BODE DAN HILI (DANCHI BODE/DAN CHEBODE)',
			'GUN GUMA/GUNGUMA',
			'SHEBRA PRIMARY SCH. (SHEBRA MAGAJI)',
			'SHIYAR DELLA BAKALE (BAKALE/DORAI)'
		];
	}
}