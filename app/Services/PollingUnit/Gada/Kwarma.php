<?php
namespace App\Services\PollingUnit\Gada;
	
	class Kwarma
	{
		
		function __construct()
		{
			# code...
			 $this->pollingUnits = $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'KWARMAR DIKKO, PRY SCH',
				'KWARMAR PRY. SCH',
				'KWARAMA',
				'KUMAJI',
				'SABON GIDA',
				'KIRI KAFADA'
			];
		}
	}