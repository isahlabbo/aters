<?php
namespace App\Services\PollingUnit\Kware;
	
	class Tsaki_Walake_E
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'ZAMAU PRI. SCH., PRI. SCH.',
				'ZAMAU MASALLACI, SHIYAR MASALLACI',
				'TSAKI/ADARAWA',
				'GANTAMAU',
				'BANGU, SHIYAR HAKIMI',
				'CHIDA, SHIYAR HAKIMI',
				"WALAKA'E, SHIYAR HAKIMI",
				'DANGAWO, SHIYAR HAKIMI',
				"BAGGA 'A', SHIYAR HAKIMI",
				'DANKOMANI, PRI. SCH.',
				'MARUDA, PRI. SCH.',
				'MAMDA, BARNAWA PRY. SCH.'
			];
		}
	}