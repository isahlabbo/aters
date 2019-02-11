<?php
namespace App\Services\PollingUnit\Goronyo;
	
	class Birjingo
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'BIRJINGO',
				'MALLAMAWA',
				'BABAN FILI (WARANKAI)',
				'BAKIN RIJIYA (TULUTTU DAN FILI)',
				'DAN FILI (GANZA BUNGI)',
				'GIDAN TUDU, GIDAN TUDU',
				'DAN FILI (KUMUINIYA/FURAGIRKE)',
				'TULUTTU, TULUTTU PRY SCH'
			];
		}
	}