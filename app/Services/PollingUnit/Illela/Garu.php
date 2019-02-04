<?php
namespace App\Services\PollingUnit\Illela;
	
	class Garu
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'CHANCHAWA, HILI BABBA',
				'PRIMARY SCHOOL GARU GARI (GARU GARI S/MAGORI)',
				'GIDAN MAIGWANDU, HILI BABBA',
				'SHIYAR GALADIMA, G/GALADIMA',
				'SHIYAR WAKILI, KWAKWARA',
				'RUGGAR GARU, MAHAUTA',
				'GIDAN LABARAN, MAKARANTA',
				'GARU KURFAI, HILI',
				'MULLELA, HILI MULLELA',
				'SHIYAR TUDU DIBONI'
			];
		}
	}