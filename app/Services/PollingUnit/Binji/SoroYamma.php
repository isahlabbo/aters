<?php
namespace App\Services\PollingUnit\Binji;
	
	class SoroYamma
	{
		
		function __construct()
		{
			# code...
			 $this->pollingUnits = $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'KALGO, MALLAMAWA',
				'KALGO PRI. SCH',
				'KURA GIDAN DIKKO PRI. SCH. (KURA GARKA DIKKO)',
				'KURA SHIYAR KANE',
				'BIRNI WARI G/JAUGA PRI. SCH. (BIRNI WAI G/JAUGA)',
				'BIRNIN‐WARI GAJARE',
				'KARANI PRI. SCH. PRI. SCH. (KARANI MASALACI S. HAKIMI)',
				'KARANI SABON‐ZAMA',
				'ALELA GIDAN ARDO',
				'ALELA DARUSA'
			];
		}
	}