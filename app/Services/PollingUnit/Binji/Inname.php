<?php
namespace App\Services\PollingUnit\Binji;
	
	class Inname
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'INNAME MASUKAYI',
				'PRI. SCH. INNAME (GURUZA SAMANA)',
				'PRI. SCH. G/MONDE (KUSA GA GIDAN MONDE)',
				'FARUWA JAMALI',
				'PRI. SCH. G/ BAWA (GIDAN BAWA)',
				'GIDAN GINJO'

			];
		}
	}