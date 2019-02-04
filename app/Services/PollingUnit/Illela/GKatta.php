<?php
namespace App\Services\PollingUnit\Illela;
	
	class GKatta
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'BASANTA, BASANTA',
				'GAIDAU, MAKARANTA',
				'KWANDAMO, KWANDAMO',
				'MALALI, MAKARANTA',
				'GIDAN KATTA, S. HAKIMI',
				'GIDAN SANDAGA, G. SANDAGA',
				'MASASA, MASASA HILI',
				'MASHEKARIN BASANTA, MASHEKARI',
				'GAIDAN MAKARANTA, MAKARANTA',
				'BASANTA MAKARANTA, MAKARANTA'
			];
		}
	}