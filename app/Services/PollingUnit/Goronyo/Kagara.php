<?php
namespace App\Services\PollingUnit\Goronyo;
	
	class Kagara
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'SHIYAR MARAFA',
				'SHIYAR SARKAWA',
				'SHIYAR SANYAYA, BALLA',
				'KAWADATA/ KAWADATA',
				'DAN FILI (ILLELA DAWAGARE)',
				'YAR’KOFA (DANJORO)',
				'RIJIYA M/SALIHU (KUDA KUDA)'
			];
		}
	}