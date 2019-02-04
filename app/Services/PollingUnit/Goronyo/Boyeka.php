<?php
namespace App\Services\PollingUnit\Goronyo;
	
	class Boyeka
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnit();
		}

		public function pollingUnits(){
			return [
				'TSOHON GARIN BOYEKAI',
				'DAN FILI (SABON GARIN BOYEKAI)',
				'GAMIHAR/KAWARA',
				'YAR KOFA (YAR NAGGE)',
				'GIDAN SAIDU, GIDAN SAIDU'
		}
	}