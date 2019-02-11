<?php
namespace App\Services\PollingUnit\Goronyo;
	
	class Kojiyo
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'PRI. SCH (SHIYAR MAGAJI)',
				'G/KURMAN JAHADI (BARE TSARA)',
				'GAMIHAR HURI, GANIHAR HURI',
				'DARBABIYA DARBABIYA',
				'MALABA, MALABA'
			];
		}
	}