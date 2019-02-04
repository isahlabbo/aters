<?php
namespace App\Services\PollingUnit\Rabah;
	
	class Tsamiya
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'LUNGUN DUNY PRIMARY SCHOOL (SHIYAR DUNYA)',
				'SHIYAR ANNA',
				'SHIYAR CHIDAWAKI',
				'GIGANI PRIMARY SCHOOL (SHIYAR GIGANE GIDAN HAKIMI)',
				'SHIYAR DAN ALI PRIMARY SCHOOL (SHIYAR DANALI)',
				'LUNGUN DUNYA PRIMARY SCHOOL (LUNGUN DUNIYA)'
			];
		}
	}