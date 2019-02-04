<?php
namespace App\Services\PollingUnit\Gudu;
	
	class Chilas
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'CHILAS YAMMA',
				'CHILAS GABAS',
				'MAKUYA YAMMA',
				'MAKUYA GABAS',
				'DANFILI, KASAURA',
				'DANGADABRO',
				'TULLUWA',
				'KWALCHI',
				'DANFILI, KASAURA'
			];
		}
	}