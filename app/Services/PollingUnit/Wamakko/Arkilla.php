<?php

namespace App\Services\PollingUnit\Wamakko;
/**
* this class will reurn polling units of this class
*/
class Arkilla
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'HOUSE NO 7, ABUJA RD',
			'GIDAN NUFAWA',
			'FEDERAL LOW COST',
			'ARKILLA LIMAN',
			'ARKILLA MAGAJI',
			'GDSS ARKILLA',
			'BADO UKU‐UKU PRI. SCH.',
			'CLAPPERTON ROAD',
			'GAWON NAMA',
			'ZAGA ROAD',
			'GIDAN SALANKE',
			'DUNGUZA',
			'DAN GAWO',
			'GAWON GWIWA',
			'MINI MARKET GUIWA LOW COST',
			'MINI MARKET II',
			'HOUSE NO.107 GUIWA LOW COST',
			'HOUSE NO. 107 GWIWA L OW COST',
			'GIDAN NUFANA',
			'RIJIYA HOUSE',
			'GWIWA M.P.S',
			'GIDAN DAN KADUNA',
			'DOROWA ROAD M.P.S',
			'NCCL QTRS',
			'KWARE ROAD I',
			'KWARE ROAD II',
			'LUGGU',
			'M.P.S SECT. ROAD I',
			'M.P.S SECT. ROAD II',
			'DARUL QURAN',
			'SHIYAR HAKIMI NASARAWA',
			'H.B. CAS GATE H.B.CAS',
			'T/MAFARA JUNCTION ‐ T/MAFARA ROAD',
			'CEMENT M.P.S ‐ WURNO ROAD',
			'NEAR NURU YAKIN MSQ. PARLIAMENTARY QTS',
			'ZAGGA ROAD GAWON NAMA',
			'GUIWA‐POLO CLUB'
		];
	}
}