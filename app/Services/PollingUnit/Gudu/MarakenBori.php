<?php
namespace App\Services\PollingUnit\Gudu;
	
	class MarakenBori
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'DANFILI, MARAKEN BORI',
				'DANFILI, MARAKEN FULANI',
				'DANFILI, JIMA JIMIN SULE',
				'DANFILI, TAGIMBA',
				'DANFILI JIMA JIMIN GAYA'
			];
		}
	}