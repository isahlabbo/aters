<?php
namespace App\Services\PollingUnit\Goronyo;
	
	class Takakume
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits = $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'TAKAKUME, DAN FILI',
				'TAKAKUME/BUKKA HAMSIN',
				'GORAU, BAKIN KASUWA',
				'MAI IYALI',
				'DISPENSARY (GIDAN ALWALE)',
				'DISPENSARY SAKKARAWA (SAKKARAWA)',
				'DAN FILI (DAN‐GARKO)'
			];
		}
	}