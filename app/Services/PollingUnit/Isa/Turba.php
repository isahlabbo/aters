<?php
namespace App\Services\PollingUnit\Isa;
	
	class Turba
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'TURBA MAGAZAWA, PRI. SCH.',
				'DAN FILI KOFAR YAMMA (KOFAR YAMMA)',
				'DAN FILI ZAURE HUDU (ZAURE HUDU)',
				'KAIBABA, PRI. SCH.',
				'LGEA PRI SCH. GAWAKUKE (GAWAKUKE DANFILI)',
				'GIDAN BAWA, PRI. SCH.',
				'SHALLA, PRI. SCH.',
				'LGEA PRI. SCH. TAKWASTAWA FAGE (TAKWASTAWA FAGE SHIYAR MAIGARI)',
				'FILIN KASUWA MADATTAI FAGE (MADAITTAI FAGE)',
				'GUMAL, PRI. SCH.',
				'KAIBABA, PRI. SCH.'
			];
		}
	}