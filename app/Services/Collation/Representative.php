<?php
namespace App\Services\Collation;
/**
* this class will return the sumary of election result at representative level
*/
use App\Services\Collation\Senatorial;

class Representative extends Senatorial
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

}