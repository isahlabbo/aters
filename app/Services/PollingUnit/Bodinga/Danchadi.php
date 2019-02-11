<?php
namespace App\Services\PollingUnit\Bodinga;
	
	class Danchadi
	{
		
		function __construct()
		{
			# code...
			 $this->pollingUnits = $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'READING ROOM, KANWURI',
				'YANDURUMI, SHIYAR ALU HARKA',
				'SHIYAR HAYI, SHIYAR HAYI',
				'SHIYAR DIKKO, SHIYAR DIKKO',
				'SHIYAR DANAMO',
				'KARAJE, KARAJE',
				'CHILAWA, SHIYAR TITTI',
				'SH. S/FAWA',
				'MRS RUMBUKU',
				"NORMADIC SCH. KARAZUNTU (KARAZUNTU, KARAZUNTU)",
				"SHIYAR MARAFA, SHIYAR MARAFA",
				'PRY SCH, GIDAN GWANFU',
				'SHIYAR HAKIMI, GIDAN DANBUBE',
				'YANGIDAJE, YANGI DAJE',
				'DUTSIN MAZARA, PRY SCH',
				'PRY SCH, RUMBUKI'
			];
		}
	}


