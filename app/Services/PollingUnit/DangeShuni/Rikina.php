<?php
namespace App\Services\PollingUnit\DangeShuni;
	
	class Rikina
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'LAFFI/PRIMARY SCHOOL LAFFI (LAFFI)',
				'LUGGERE/ PRIMARY SCHOOL (LUGGERE)',
				'SHIYAR ABARMA',
				'SHIYAR SHEHU/GIDAN RUWA RIKINA (SHIYAR SHEHU)',
				'BUBARI BABBA',
				'KWANA/KONGON‐RIMA BASIN (KWANA)',
				'MAJO/ PRIMARY SCHOOL MAJO (MAJO GIDAN DIKKO)',
				'SABARU/ PRIMARY SCHOOL SABARU (SABARU)'
			];
		}
	}