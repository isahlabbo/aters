<?php
namespace App\Services\PollingUnit\Goronyo;
	
	class Giyawa
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnit();
		}

		public function pollingUnits(){
			return [
				'SHIYAR GALADIMA, GALADIMA',
				'YARKOFA (SHIYAR UBANDAWAKI)',
				'SHIYAR FADAMA, FADAMA',
				'FARINGIDA, FARINGIDA'
		}
	}