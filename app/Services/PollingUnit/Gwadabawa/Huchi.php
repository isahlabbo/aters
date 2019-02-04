<?php
namespace App\Services\PollingUnit\Gwadabawa;
	
	class Huchi
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'SHIYAR HAKIMI, MARANAWA',
				'SHIYAR HAKIMI, SABON GARI',
				'FILIN INJIN, KABAWA',
				'PRY SCH, KAURA HUCHI',
				'SHIYAR HAKIMI, JUJIN MAGAJI',
				'KASUWA, YAURAWA',
				'PRY SCH, SHIYAR GALADIMA'
			];
		}
	}