<?php
namespace App\Services\Collation;
/**
* this class will return the sumary of election result at representative level
*/
use App\Services\Collation\Senatorial;
use App\Lga;

class Representative
{
	
	function __construct()
	{
		$this->result = [
            ['name'=>'SOKOTO NORTH / SOKOTO SOUTH','result'=>$this->sokotoNorth()],
            ['name'=>'WAMAKKO / KWARE','result'=>$this->kware()],
            ['name'=>'SILAME / BINJI','result'=>$this->binji()],
            ['name'=>'TANGAZA / GUDU','result'=>$this->gidangyadi()],
            ['name'=>'TAMBUWAL / KEBBE','result'=>$this->tambuwal()],
            ['name'=>'YABO / SHAGARI','result'=>$this->yabo()],
            ['name'=>'BODINGA / DANGE SHUNI / TURETA','result'=>$this->bodinga()],
            ['name'=>'WURNO / RABAH','result'=>$this->wurno()],
            ['name'=>'GORONYO / GADA','result'=>$this->gada()],
            ['name'=>'SABON BIRNI / ISAH','result'=>$this->sabonBirni()],
            ['name'=>'GWADABAWA / ILLELA','result'=>$this->gwadabawa()],
		];
	}

	protected function sokotoNorth()
	{
		$lga = [
            '16',
            '17',
		];
		return $this->getResult($lga);
	}

	protected function kware()
	{
		$lga = [
            '10',
            '21',
		];
		return $this->getResult($lga);
	}
	protected function binji()
	{
		$lga = [
            '1',
            '15',
		];
		return $this->getResult($lga);
	}
	protected function gidangyadi()
	{
		$lga = [
            '6',
            '19',
		];
		return $this->getResult($lga);
	}
	protected function tambuwal()
	{
		$lga = [
            '11',
            '18',
		];
		return $this->getResult($lga);
	}
	protected function yabo()
	{
		$lga = [
            '14',
            '23',
		];
		return $this->getResult($lga);
	}
	protected function bodinga()
	{
		$lga = [
            '2',
            '3',
            '20'
		];
		return $this->getResult($lga);
	}
	protected function wurno()
	{
		$lga = [
            '12',
            '22',
		];
		return $this->getResult($lga);
	}
	protected function gada()
	{
		$lga = [
            '4',
            '5',
		];
		return $this->getResult($lga);
	}
	protected function sabonBirni()
	{
		$lga = [
            '9',
            '13',
		];
		return $this->getResult($lga);
	}
	protected function gwadabawa()
	{
		$lga = [
            '7',
            '8',
		];
		return $this->getResult($lga);
	}
	protected function getResult($array)
	{   
	    $pdp = 0;
		$apc = 0;
		$other = 0;
        $invalid = 0;
        $registered = 0;
        $acredited = 0;

		foreach ($array as $lga) {
			$lga = Lga::find($lga);
			$lga_result = $lga->summary();
            $pdp = $pdp + $lga_result['representative']['pdp'];
            $apc = $apc + $lga_result['representative']['apc'];
            $other = $other + $lga_result['representative']['other'];
            $invalid = $invalid + $lga_result['representative']['invalid'];
            $registered = $registered + $lga->registered();
            $acredited = $acredited + $lga->acredited();
  			
  		}

		return [
            'pdp' => $pdp,
            'apc' => $apc,
            'other' => $other,
            'invalid' => $invalid,
            'acredited' => $acredited,
            'registered' => $registered
		];
	}

}