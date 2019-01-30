
<?php

namespace App\Services\PollingUnit;
/**
* this class will reurn polling units of this class
*/
class Kammata
{
	
	function __construct(argument)
	{
		$this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			'UNDER THE TREE GATARE (GATARE)',
			'MPS KAMMATA ‐ KAMMATA',
			'DISPENSARY FANARI KAURA ABDUWA (FAWARI KAURA ABDUWA)',
			'AN OPEN SPACE LOKOBI MANIA (LOKOBI MANA)',
			'UNDER THE TREE LOKOBI KANAWA (LOKOBI KANAWA)',
			'AFTER DISTRIC HEAD HOUSE LUNGUN ALKALI (LUNGUNN ALKALI)',
			'RUGGAR MODEL PRY SCH',
			'MPS YARUME ‐ YARUMAN D/GALADIMA PRY SCH',
			'YARUME RAFI AN OPEN SPACE [ARUME] (YARUME RAFI)'
		];
	}
}