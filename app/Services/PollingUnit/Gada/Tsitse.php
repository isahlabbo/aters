<?php
namespace App\Services\PollingUnit\Gada;
	
	class Tsitse
	{
		
		function __construct()
		{
			
			$this->pollingUnits = $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'KARANGIYA',
				'GIDAN ADAWA PRY SCH',
				'GIDAN HASHIMU I',
				'KOROJI',
				'GIDAN GULBI',
				'GIDAN SHEKARAU, DAN FILI',
				'JINGILMA, PRY SCH',
				'SHIYAR DAN GALADIMA',
				'GASAHO',
				'GIDAN KAURA',
				'BASANA',
				'GIDAN TUDU',
				'GIDAN HASHIMU II',
				'TSITSE , PRY SCH'
			];
		}
	}