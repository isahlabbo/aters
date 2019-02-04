<?php
namespace App\Services\PollingUnit\DangeShuni;
	
	class Rudu
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'RUDU MAKERA',
				'GIDAN JADA/TUSHIN DAN FARU KUSA DA GIDAN S/FAWA (GIDAN JADA)',
				'PRIMARY SCHOOL SHIYAR DIKKO (GINDIN DIKKO)',
				'RUDU PRIMARY SCHOOL',
				'KALAUSA RAFI',
				'SHIYAR HAKIMI ',
				'HURUMI/GIDAN RUWA (HURUMI)',
				'AMANAWA CAMP',
				'GIDAN MANDE/ PRIMARY SCHOOL GIDAN MANDE (BAKIN GIDAN MANDE',
				'FILI MAKARANTA',
				'HURUMI MPS',
				'LUGGAR DAUDU/TUSHIN FARU KOFAR B (LUGGAR DAUDU)'
			];
		}
	}