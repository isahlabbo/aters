<?php
namespace App\Services\PollingUnit\Kware;
	
	class Tunga_Mallamawa
	{
		
		function __construct()
		{
			
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'TUNGA, PRI. SCH.',
				'UNDER TREE TUNGA (TUNGA SHIYAR HAKIMI)',
				'TUNGAR DUNA, SHIYAR HAKIMI',
				'NUFAWA, PRI. SCH.',
				'GEBAWA, SHIYAR HAKIMI',
				'MALLAMAWA SARKIN YAKI, PRI. SCH.',
				'MALLAMAWA KASUWA, KAURA MALLAMAWA',
				'GIDAN GARI, SHIYAR HAKIMI',
				'RAFIN DUBAU, SHIYAR HAKIMI',
				'GIDAN BASSAKARE, PRI. SCH.',
				'TANRAGO, SHIYAR HAKIMI'
			];
		}
	}