<?php
namespace App\Services\PollingUnit\Gada;
	
	class Gilbadi
	{
		
		function __construct()
		{
			# code...
			 $this->pollingUnits = $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'GILBADI GARI, DISPENSARY',
				'GIDAN ADA, DAN FILI',
				'GIDAN ABDO, PRY SCH',
				'GIDAN KACHA, PRY SCH',
				'TSARO MAIKASUWA, PRY SCH',
				'GIDAN LIYAL PRY SCH',
				'GIDAN YARFADA, PRY SCH',
				'GIDAN AYUBA PRY SCH',
				'TAKALMAWA , PRY SCH',
				'GIDAN MAITURARE',
				'TSARO MALAMAI',
				'GUNDUNBUL, PRY SCH',
				'GIDAN MAIJAGUWA PRY SCH',
				'GIDAN MAI TURARE, SHIYAR MAGAJI',
				'GIDAN JOBI PRY SCH',
				'SAKITAWA, PRY SCH',
				'GIDAN BASHARA',
				'GIDAN AJANBO SHIYAR MAGAJI',
				'SABON GARI GILBADI',
				'GIDAN DARHU'
			];
		}
	}