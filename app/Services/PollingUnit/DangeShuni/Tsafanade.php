<?php
namespace App\Services\PollingUnit\DangeShuni;
	
	class Tsafanade
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'GARIYABO/PRIMARY SCHOOL GIDAN GARA (GARAYABO)',
				'GALANKAWA/ PRIMARY SCHOOL KATSIRA (GALANKAWA',
				'KATSIRA',
				'TSAKAR GIDA',
				'TSANFANADE',
				'GIDAN BARMO',
				'ADARAWA',
				'BELA, BELA',
				'GURGAWA, GURGAWA'
			];
		}
	}