<?php
namespace App\Services\PollingUnit\Kebbe;
	
	class Kuchi
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'KOKANI MODEL PRY. SCH, (SHIYAR KOKANI, SHIYAR KOKANI)',
				'ALELAWA UNDER CHEDIYA NEAR RIJIYA (ALELAWA GARKAR ALH. ABU)',
				'KOKANI MODEL PRY. SCH. II (SHIYAR KOKANI MAKARANTA)',
				'SHIYAR S/RUWA, SHIYAR S/RUWA (YA)',
				'SHIYAR S/RUWA, SHIYAR S/RUWA',
				'SHIYAR S/RUWA, MASALAU M. JIBO',
				'HERE, KUCHI PRY SCH',
				'ARAUSAYA, ARAUSAYA SABON GARI',
				'TSAMIYAR AYI NEAR WATER TANK, (TSAMIYAR TSAMIYA KUCHI)',
				'ADOMA NEAR MAIN ROAD (ADOMA GARKAR ABUN LIBA)'
			];
		}
	}