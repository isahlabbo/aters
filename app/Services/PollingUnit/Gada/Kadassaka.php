<?php
namespace App\Services\PollingUnit\Gada;
	
	class Kadassaka
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'SHIYAR AJIYA',
				'SHIYAR JARI',
				'TUNDUN BULUS',
				'SHIYAR SARKIN YAYI',
				'GIDAN YARABA PRY SCH I',
				'TSAIDAWA, TSAIDAWA',
				'MAWA HABIBU',
				'KADASSAKA KILIYA, PRY SCH',
				'KILIYA, PRY SCH',
				'SHIYAR BAWA I',
				'SHIYAR BAWA II',
				'SHIYAR SANDA',
				'MAWA SANDA',
				'GIDAN YARABA PRY SCH II'
			];
		}
	}