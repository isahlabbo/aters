<?php
namespace App\Services\PollingUnit\Rabah;
	
	class Tursa
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'SABARRU',
				'GIDAN FULANI PRIMARY SCHOOL (GIDAN FULANI)',
				'TURSA',
				'TUMBULLA',
				'RAKAKA MAGAJI',
				'RAKAKA BUZU'
			];
		}
	}