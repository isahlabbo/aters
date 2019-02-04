<?php
namespace App\Services\PollingUnit\Rabah;
	
	class Gawakuke
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'TOFA PRIMARY SCHOOL I (MADAWA)',
				'TOFA PRIMARY SCHOOL II (SARDAUNA BAKIN KASUWA)',
				'TOFA PRIMARY SCHOOL III (SHIYAR KWARI)',
				'GAWAKUKE',
				'RABAH MABA',
				'GIDAN DOKA ‐ GIDAN DOKA',
				'GIDAN AIMAJI P. HEALTH CENTRE (GIDAN ALMAJI PRIMARY SCHOOL)',
				'GIDAN MAGAJI PRIMARY SCHOOL (GIDAN MAGAJIYA)',
				'GIDAN BARABO ‐ GIDAN BARABO',
				'PRIMARY SCHOOL S/YAKI (SHIYAR SARKIN YAKI)',
				'BURMAWA BARABO ‐ DAN FILI'
			];
		}
	}