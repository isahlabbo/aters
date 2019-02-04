<?php
namespace App\Services\PollingUnit\Binji;
	
	class Maikulki
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'MAI KULKI PRI. SCH. (SHIYAR HAKIMI MAI KULKI)',
				'PRI. SCH. KAWURI MAIKULKI (KAWURI MAIKULKI)',
				'PRI. SCH. SHIYAR MARINA MAIKULKI (S/MARINA MAIKULKI)',
				'PRI. SCH SHIYAR MARINA YAMMA (SHIYAR MARINA YAMMA)',
				'RAGA LABAU MAKARANTA',
				'HIZNA MAKARANTA, HIZNA',
				'UDDIBA G/DIKKO MAMBA',
				'KUSA DA GARKAR MAGAJI, MARGAI',
				'MALIYON ALMU, MALIYO',
				'KAN‐WURI MAIKULKI, FINLIN BARU'
			];
		}
	}