<?php
namespace App\Services\Wards;
/**
* this class will take local government name and generate
*/
use App\Services\PollingUnit\CreatePollingUnits;
class Wards
{	
	function __construct($lga)
	{
		$this->wards = $this->getWards($lga);
	}
    
	protected function getWards($lga)
	{
	
		switch ($lga) {
			case 'Binji':
				$wards = new Binji;
				break;
			case 'Bodinga':
				$wards = new Bodinga;
				break;
			case 'Dange Shuni':
				$wards = new DangeShuni;
			break;
				case 'Gada':
				$wards = new Gada;
			    break;
			case 'Goronyo':
				$wards = new Goronyo;
				break;
			case 'Gudu':
				$wards = new Gudu;
				break;
			case 'Gwadabawa':
				$wards = new Gwadabawa;
				break;
			case 'Illela':
				$wards = new Illela;
				break;
			case 'Isa':
				$wards = new Isa;
				break;
			case 'Kware':
				$wards = new Kware;
				break;
			case 'Kebbe':
				$wards = new Kebbe;
				break;
			case 'Rabah':
				$wards = new Rabah;
				break;
			case 'Sabon Birni':
				$wards = new SabonBirni;
				break;
			case 'Shagari':
				$wards = new Shagari;
				break;
			case 'Silame':
				$wards = new Silame;
				break;
			case 'Sokoto North':
				$wards = new SokotoNorth;
				break;
			case 'Sokoto South':
				$wards = new SokotoSouth;
				break;
			case 'Tambuwal':
				$wards = new Tambuwal;
				break;
			case 'Tangaza':
				$wards = new Tangaza;
				break;
			case 'Tureta':
				$wards = new Tureta;
				break;
			case 'Wamakko':
				$wards = new Wamakko;
				break;
			case 'Wurno':
				$wards = new Wurno;
				break;
			default:
				$wards = new Yabo;
				break;

		}
		return $wards;
	}


}