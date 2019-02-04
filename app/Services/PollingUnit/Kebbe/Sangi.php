<?php
namespace App\Services\PollingUnit\Kebbe;
	
	class Sangi
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'NABASA, NABASA PRY SCH',
				'SANGI, SANGI PRY SCH',
				'JIGAWA, JIGAWA PRY SCH',
				'SABON BIRNI, S.BIRNI PRY SCH',
				'YARROMO GINDIN ITACIYA (YARROMO GARKAR HAKIMI)',
				'SABON BIRNI 2, SHIYAR MAGAJI',
				'SABLA, SABALA PRY SCH',
				'TUNE, M.P.S',
				'LUMU GIDIN ITACIYA (LUMU GARKAR HAKIMI)',
				'SANGI ASIBITI (SANGI SH KOFAR)'
			];
		}
	}