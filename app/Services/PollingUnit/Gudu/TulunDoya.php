<?php
namespace App\Services\PollingUnit\Gudu;
	
	class TulunDoya
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'DANFILI, TULUN DOYA  A',
				'DANFILI, TUDUN DOYA  B',
				'KISO, KISO',
				'YAMO, YAMO',
				'KWARARAF, KWARARAF'
			];
		}
	}