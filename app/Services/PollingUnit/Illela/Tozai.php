<?php
namespace App\Services\PollingUnit\Illela;
	
	class Tozai
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'SHIYAR S. FAWA TOZAI, FILIN AGALE',
				'TOZAI S. HAKIMI, S. MAMMAN HAKIMI',
				'TOZAI BAYAN DUTSI, MAKARANTA',
				'MASAWA GIDAN KURA, HILI BABBA',
				'GIDAN S. FAWA, MAKARANTA',
				'GIDAN MAKERA',
				'GIDAN BANGO, MAKARANTA',
				'KORINGO, MAKARANTA',
				'GIDAN ABARSHI, GIDAN ABARSHI',
				'BALASKIYA, BALAKIYA',
				'CHOFA, CHOFA',
				'GIDAN AJIYA, GIDAN AJIYA'
			];
		}
	}