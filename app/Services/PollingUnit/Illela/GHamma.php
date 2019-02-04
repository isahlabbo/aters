<?php
namespace App\Services\PollingUnit\Illela;
	
	class GHamma
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'GIDAN IDDAU',
				'SHIYAR ADARAWA, HILIN INWALA',
				'MUNWADATA, MUNWADATA',
				'SHIYAR ABDULRAZIKU, DAN HILI',
				'TUNGAR ALMU, T/ALMU',
				'ZANGON SHAHO, ZANGON SHAHO',
				'MANSALAWA BABBA',
				'DARAMBA',
				'SHIYAR GARBA, HAKIMI',
				'TAKALMAWA, TAKALMAWA',
				'TAKA TSABA',
				'TSANGALADAM, TSANGALADAM',
				'GIDAN MAKERA',
				'GIDAN MAKERA, SH MAGAJI MAKARANTA',
				'SHIYAR MAGAJI, MAKARANTA',
				'GIDAN ABUBA, GIDAN ABUBA',
				'SHIYAR RAFI',
				'AMBARURA Y/ MASALAWA, Y/AMBARURA',
				'AMBARURA DABAGI, S. LATSA',
				'GIDAN FAJA, GIDAN FAJA',
				'HERE, HERE',
				'HURA GIRKE, HURA GIRKE',
				'DUMAJE KWARE',
				'AMBARURA MAKARANTA, MAKARANTA',
				'AMBARURA INWALA, MAKARANTA',
				'SHIYAR RAFI B, S/RAFI',
				'AMBARURAWA DAN HILI MAKARANTA',
				'AMBARURA MAKARANTA B, DANHILI'
			];
		}
	}