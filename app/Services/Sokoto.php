<?php
namespace App\Services;
/**
* this class will the array of sokoto state local governmemt
*/
use App\Services\Wards\Wards;

use App\Services\PollingUnit\PollingUnits;

class Sokoto
{

	function __construct()
	{
		$this->data = $this->localGovernments();
	}

	public function localGovernments()
	{
		return [
            ['name'=>'Binji','wards'=>$this->getPollingUnits('Binji')],
			['name'=>'Bodinga','wards'=>$this->getPollingUnits('Bodinga')],
			['name'=>'Dange Shuni','wards'=>$this->getPollingUnits('Dange Shuni')],
			['name'=>'Gada','wards'=>$this->getPollingUnits('Gada')],
			['name'=>'Goronyo','wards'=>$this->getPollingUnits('Goronyo')],
			['name'=>'Gudu','wards'=>$this->getPollingUnits('Gudu')],
			['name'=>'Gwadabawa','wards'=>$this->getPollingUnits('Gwadabawa')],
			['name'=>'Illela','wards'=>$this->getPollingUnits('Illela')],
			['name'=>'Isa','wards'=>$this->getPollingUnits('Isa')],
			['name'=>'Kebbe','wards'=>$this->getPollingUnits('Kebbe')],
			['name'=>'Kware','wards'=>$this->getPollingUnits('Kware')],
			['name'=>'Rabah','wards'=>$this->getPollingUnits('Rabah')],
			['name'=>'Sabon Birni','wards'=>$this->getPollingUnits('Sabon Birni')],
			['name'=>'Shagari','wards'=>$this->getPollingUnits('Shagari')],
			['name'=>'Silame','wards'=>$this->getPollingUnits('Silame')],
			['name'=>'Sokoto North','wards'=>$this->getPollingUnits('Sokoto North')],
			['name'=>'Sokoto South','wards'=>$this->getPollingUnits('Sokoto South')],
			['name'=>'Tambuwal','wards'=>$this->getPollingUnits('Tambuwal')],
			['name'=>'Tangaza','wards'=>$this->getPollingUnits('Tangaza')],
			['name'=>'Tureta','wards'=>$this->getPollingUnits('Tureta')],
			['name'=>'Wamakko','wards'=>$this->getPollingUnits('Wamakko')],
			['name'=>'Wurno','wards'=>$this->getPollingUnits('Wurno')],
			['name'=>'Yabo','wards'=>$this->getPollingUnits('Yabo')]
		];
	}
	
	protected function getPollingUnits($lga)
	{
		$unit = new pollingUnits($lga);
        return $unit->pollingUnits;
	}
}