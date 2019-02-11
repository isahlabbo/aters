<?php
namespace App\Services\PollingUnit\Bodinga;
	
	class Bangi
	{
		
		function __construct()
		{
			# code...
			 $this->pollingUnits = $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'DABAGA PRY SCH, SHIYAR MARAFA',
				'GIDAN AJIYA, SHIYAR MARAFA',
				'SHIYAR HAKIMI, WURO ELDE',
				"PRY. SCH. MAIKATORO (MAIKATORO/S HAKIMI)",
				'SHIYAR HAKIMI, KYALUJE',
				'SHIYAR HAKIMI, CHOFI',
				"DISPENSARY WUMUMU (WUMUMU, S/S/DUTSI)",
				"PRY. SCH. BANGI DUTSE (BANGI DUTSE, S/MARAFA)",
				"BANGIRAFI PRY SCH. SH‐SARKI",
				'KWAMTSI KASUWA',
				'SHIYAR HAKIMI, LUGE',
				"MAKARANTA BATSAUJE (BATSAUJE, S/NOMA)",
				'BATSAUJE, SHIYAR BARADE',
				'PRY SCH, DUTSIN MAIGUNYA',
				'SHIYAR HAKIMI, GIDAN GADANGA',
				"MAKARANTABANGI DUTSI (BANGI DUTSI S/DANGALADIMA)"
			];
		}
	}

