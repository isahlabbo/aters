<?php
namespace App\Services\PollingUnit\Rabah;
	
	class Gwaddodi_GidanBuWai
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'PRIMARY SCHOOL (SHIYAR HAKIMI)',
				'PRIMARY SCHOOL (SHIYAR BAZAI)',
				'PRIMARY SCHOOL (SHIYAR MAGAJI)',
				'MPS GWADDODI (SHIYAR YARI)',
				'PRIMARY SCHOOL (SHIYAR BANGO)',
				'ANGAMBA PRY SCHOOL (ANGAMBA)',
				'DANDALO PRY. SCHOOL (DANDALO)'
			];
		}
	}