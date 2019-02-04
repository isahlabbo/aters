<?php
namespace App\Services\PollingUnit\Gudu;
	
	class Kurdula
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'PRY SCH, KURDULA',
				'SHIYAR DAMBO',
				'ADARAWA, ZABARMAWA',
				'KURUNKUSITI/BUNYA',
				'DARUSA GAWO',
				'DARUSA MUSA',
				'DARUSA SAMNA',
				'KATSURA, KATSURA',
				'DABAGA, DABAGA',
				'ADARAWA ZABARMAWA DANFILI'
			];
		}
	}