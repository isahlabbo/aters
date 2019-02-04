<?php
namespace App\Services\PollingUnit\Binji;
	
	class TungarKose
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'TUNDAN KOSE',
				'AJOGAL, MODEL PRY SCH AJOGAL',
				'TAUDI ZAIDI',
				'GIDAN MAIDEBE, PRY SCH GIDAN MAIDEBE',
				'KABAWA PRI. SCH. (KABAWA DANFILI)'
			];
		}
	}