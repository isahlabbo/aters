<?php
namespace App\Services\PollingUnit\Kebbe;
	
	class KebbeEast
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'TUDUN WADA PRY. SCH. (SHIYAR UBANDAWAKI GARKAR HASHIM)',
				'TUDUNWADA, T/WADA PRY SCH',
				'M.P.S (SHIYAR SABON GARI GARKAR ALH. MUSA)',
				'DUKURA A, DUKURA D/HILI',
				'KUNKURU, D/HILI',
				'SHIYAR UBANDAWARI, M.P.SCH',
				'DUKURA B, D/HILI',
				'MALLAMAWA, GARKAR M. NAINU',
				'BALIJAN D/HILI'
			];
		}
	}