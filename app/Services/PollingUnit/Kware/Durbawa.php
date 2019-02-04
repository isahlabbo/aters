<?php
namespace App\Services\PollingUnit\Kware;
	
	class Durbawa
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'RUGGA, RUGGA',
				'SARKAWA, SARKAWA',
				'KAURA, KAURA',
				'DUNGUJI, DUNGUJI',
				'TORANKA DAKARE, TORANKA, DAKARE',
				'TORANKA DAWAKI, TORANKA DAWAKI',
				'GIDAN KULODO, GIDAN KULODO',
				'GIDAN GERO, GIDAN GERO',
				'KURFI, KURFI',
				'UNDER TREE SARKAWA (SARKAWA)'
			];
		}
	}