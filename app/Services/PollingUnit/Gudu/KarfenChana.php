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
				'DANFILI AWULKITI MAIGARI',
				'KUKOKIN RAFI',
				'RAFIN KALGO',
				'HUS',
				'DANFILI AWULKITI PRY SCH'
			];
		}
	}