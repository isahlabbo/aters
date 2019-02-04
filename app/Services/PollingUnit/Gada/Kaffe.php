<?php
namespace App\Services\PollingUnit\Gada;
	
	class Kaffe
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'SHIYAR HAMMA',
				'SHIYAR SARIKIN YAKI',
				'GIDAN ZOMO',
				'ALI BAWA SHIYAR SANI',
				'BANTALAWA',
				'SAFIYAL MAGORI',
				'YAGARMAWA',
				'BANTALAW S/MAGAJI',
				'SAFIYAR MAGORI',
				'S/SANI WAKILI'
			];
		}
	}