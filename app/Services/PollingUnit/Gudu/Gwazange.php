<?php
namespace App\Services\PollingUnit\Gudu;
	
	class Gwazange
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'PRY SCH, GWAZANGE',
				'DANFILI, BOTO',
				'DANFILI, YAKA GABAS',
				'DANFILI, YAKA YAMMA',
				'DANFILI GWAZANGE'
			];
		}
	}