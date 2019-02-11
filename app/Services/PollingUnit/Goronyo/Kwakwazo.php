<?php
namespace App\Services\PollingUnit\Goronyo;
	
	class Kwakwazo
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'DISPENSARY (KWAKWAZO SH/NOMA)',
				'TANTAR KWAI, TANTAR KWAI',
				'GARKAR SALAU (TUKAYAN MUSAA/TUKAYAN SALAU)',
				'RUNGUMAWA, RUNGUMAWA',
				'MAGANGA, MAGANGA',
				'GIDAN FAKO',
				'GIDAN GEZU',
				'ZAMACE, ZAMACE/ZAMACHEN DAN TSOHUWA',
				'YAMIN KWABE, YAMIN KWABE',
				'GIDAN BARAU, GIDAN BARAU',
				'DAN FILI (MIYAL YAKO)',
				'KWAKWAZO, KWAKWOZO PRY SCH'
			];
		}
	}