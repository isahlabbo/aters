<?php
namespace App\Services\PollingUnit\Gada;
	
	class Gada
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'OLD DISTRICT HEAD OFFICE GADA (GARKAR MARAFA)',
				'FILIN MAGAMA HUDU GADA (SHIYAR SARKIN GADA)',
				'DAN MARIDO I',
				'DANDUTSE',
				'S. GARI',
				'S. KAURAWA',
				'BIGAL',
				'TUNGAR SAHI',
				'BERIDI',
				'GIDAN KUMMU I',
				'GIDAN KUMMU II',
				'MASUKI',
				'LUNGUSU',
				'G. KARO',
				'G. HAMMA',
				'GIDAN BARHI',
				'S/ADARAWA',
				'G. DANSUDA',
				'G. ISIYAKA',
				'GIDAN ABUBAKAR',
				'G. MADAGU I',
				'G. MADAGU II',
				'DANMARIDO II',
				'S/DANFILI'
			];
		}
	}