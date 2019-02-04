<?php
namespace App\Services\PollingUnit\Kware;
	
	class Ali_Marabawa
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				"HAMMA'ALI, PRI. SCH.",
				"HAMMA'ALI, KASUWAR HAMMA'ALI",
				'GIDAN BUKWAI, SHIYAR SARKIN DAJI',
				'GIDAN TUTA, SHIYAR HAKIMI',
				'UNDER TREE GIDAN GABAS (GIDAN GABAS SHIYAR HAKIMI)',
				'MARANAWA, SHIYAR HAKIMI',
				'CINAWA, SHIYAR HAKIMI',
				'GALADANCHI SHIYAR HAKIMI',
				'SARAKAWA, SHIYAR HAKIMI',
				'GIDAN MAISHIRO, HILIN MASALLACI'
			];
		}
	}