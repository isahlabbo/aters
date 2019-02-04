<?php
namespace App\Services\PollingUnit\Kware;
	
	class G_Modibbo
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'GIDAN AKWARA, PRI. SCH.',
				'GIDAN MAIKARA, SHIYAR HAKIMI',
				'MALLAMAWA, SHIYAR HAKIMI',
				'HAUSA SH. HAKIMI',
				'SABON GARI',
				'RUGGAR GIWA, PRI. SCH. I',
				'RUGGAR GIWA, PRI. SCH. II',
				'SIREJALO, SHIYAR HAKIMI',
				'GIDAN MODIBBO, PRI. SCH.',
				'GIDAN MUSA, SHIYAR HAKIMI',
				'KARADAI, SHIYAR HAKIMI',
				'GIDAN DAN RABI, SHIYAR HAKIMI',
				'GIDAN RAIRAI, SHIYAR HAKIMI',
				'GIDAN SIRGI, SHIYAR HAKIMI',
				'UMMA RUMA, PRI. SCH. I',
				'UMMA RUMA, PRI. SCH. II'
			];
		}
	}