<?php
namespace App\Services\PollingUnit\Binji;
	
	class Jammali
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'PRI. SCH. JAMALI (JAMALI G/MAGAJI)',
				'PRI. SCH. FILIN KASUWA (FILIN KASUWA)',
				'DADDALE',
				'MASARAR FULANI',
				'DISPENSARY DALIJAN HAUSAWA (DALIJAN HAUSAWA)',
				'PRI. SCH. MAGAJI TOBI (GIDAN MAGAJI TOBI)',
				'JAMALI TOBI',
				'GIDAN KIRYA'
				
			];
		}
	}