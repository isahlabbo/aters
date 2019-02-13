<?php
namespace App\Services\PollingUnit\Gudu;
	
	class KarfenChana
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'DANFILI, KARFEN CHINA',
				'MALLAMAWA, KARFEN CHINA',
				'BUNGUEL DANFILI',
				'TUNGAR NAMAIWA'
			];
		}
	}