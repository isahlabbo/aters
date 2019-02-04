<?php
namespace App\Services\PollingUnit\Gudu;
	
	class Balle
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'BALLE GABAS',
				'BALE YAMMA',
				'RAFIN KUBU',
				'MARAFA, BANGI',
				'KOKOTAU',
				'TUNGAR BALLE',
				'KUTUFARE',
				'DAYEJI',
				'BALLI DANFILI',
				'RAFIN KUBU B'
			];
		}
	}