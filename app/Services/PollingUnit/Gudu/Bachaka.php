<?php
namespace App\Services\PollingUnit\Gudu;
	
	class Bachaka
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'BACHAKA GABAS',
				'BACKAKA YAMMA',
				'TULUN BIRI',
				'ZABARMAWA',
				'SALAWA',
				'BAKI / GUMBIN DUR',
				'SHATOKA',
				'DANFILI, GIDAN DANTANIN',
				'PRY SCH, ARBAKWAI',
				'BACHAKA DANFILI'
			];
		}
	}