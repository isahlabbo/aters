<?php
namespace App\Services\PollingUnit\Goronyo;
	
	class Shinaka
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'JINGILMA SHINAKA',
				'SHIYAR MABA, HAILIN NA MAZO',
				'SHIYAR BAURA, SHINAKA',
				'SHIYAR NOMA, SHIYAR NOMA',
				'SHIYAR GAYAWA',
				'TULUSKE, TULUSKE',
				'PRI. SCH. ACIIDO (ACHLIDO G/TOROO)',
				'DANTUDU MASARI',
				'ZAMALE / KUTUTTURU',
				'GIDAN ALFARMA, GIDAN ALFARMA',
				'GIDAN ABDO, GIDAN ABDO',
				'KURHIYAWA/TAJAYE',
				'GIDAN MICHIKAL',
				"YAR’CHEDIYA (SHIYAR MABA YANCHEDIYA, SHINAKA)",
				'SHIYAR MABA, AJA SHINAKA',
				'MASARI, MASARI'
			];
		}
	}