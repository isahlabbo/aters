<?php
namespace App\Services\PollingUnit\Kebbe;
	
	class KebbeWest
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'ASARARA PRY SCH. (ASARARA)',
				'UMBUTU PRY SCH, UMBUTU (A)',
				'NOMADIC PRY SCH. RUNTUWA (RUNTUWA)',
				'SHIYAR AJIYA, SHIYAR KEBBE',
				'BAKIN RIJIYA NEAR WATER PUMP (SHIYAR S/FAWA)',
				'GIDAN RUWA (SABON GARI)',
				'UMBUTU, UMBUTU',
				'MASALLACIN TUNI NEAR WATER TANK (MASALLACIN TUNI D/HAYATU KURHI)'
			];
		}
	}