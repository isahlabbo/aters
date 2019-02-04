<?php
namespace App\Services\PollingUnit\Kebbe;
	
	class Margai_A
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'DUMKA, D/HILI',
				'JIGIRI',
				'GADDACCE, GADACCE PRY SCH',
				'TUNGAR MINDAUDU D/HILL',
				'MARGAI SH. SHANTALI, ASIBITI',
				'MARGAI SH. GALADIMA, SH. GALADIMA',
				'YARRUDDA, D/HILI'
			];
		}
	}