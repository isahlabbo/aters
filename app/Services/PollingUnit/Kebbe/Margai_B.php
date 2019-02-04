<?php
namespace App\Services\PollingUnit\Kebbe;
	
	class Margai_B
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'UNWALA, UNWALA',
				'MARGAI SHIYAR KAURA, PRY. SCH. I (MARGAI SHIYAR SALLAMA)',
				'PRY. SCH. MARGAI SH KAURA (MARGAI SH KAURA)',
				'GAURU KASUWAR MAGAJI',
				'KARMA D/HILI',
				'D/HILI',
				'ILLELA D/HILI'
			];
		}
	}