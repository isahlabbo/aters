<?php
namespace App\Services\PollingUnit\Goronyo;
	
	class DanTasakko
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'IFED (SHIYAR GALADIMA)',
				'SHIYAR ZAKI',
				'BAKIN KASUWA (DAN SILBA)',
				'GIDAN MAGAJIYA',
				'BIJEJI',
				'IFED (TSOHON GARIN DOLE)',
				'DANTASAKKO',
				'SARWA',
				'DISPENSARY OLOLI KAMITAU (OLOLO KAMITAU)',
				'GUNDUMI',
				'MALAFARU',
				'IFED (KUBUTTA)',
				'DANWARU',
				"YAR’KOFA (KUNAWA)"
			];
		}
	}