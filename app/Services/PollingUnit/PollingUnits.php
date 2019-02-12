<?php
namespace App\Services\pollingUnit;
/**
* this class will take local government name and generate
*/
use App\Services\PollingUnit\Binji\BinjiPollingUnits;
use App\Services\PollingUnit\Bodinga\BodingaPollingUnits;
use App\Services\PollingUnit\DangeShuni\DangeShuniPollingUnits;
use App\Services\PollingUnit\Gada\GadaPollingUnits;
use App\Services\PollingUnit\Goronyo\GoronyoPollingUnits;
use App\Services\PollingUnit\Gudu\GuduPollingUnits;
use App\Services\PollingUnit\Gwadabawa\GwadabawaPollingUnits;
use App\Services\PollingUnit\Illela\IllelaPollingUnits;
use App\Services\PollingUnit\Isa\IsaPollingUnits;
use App\Services\PollingUnit\Kebbe\KebbePollingUnits;
use App\Services\PollingUnit\Kware\KwarePollingUnits;
use App\Services\PollingUnit\Rabah\RabahPollingUnits;
use App\Services\PollingUnit\SabonBirni\SabonBirniPollingUnits;
use App\Services\PollingUnit\Shagari\ShagariPollingUnits;
use App\Services\PollingUnit\Silame\SilamePollingUnits;
use App\Services\PollingUnit\SokotoNorth\SokotoNorthPollingUnits;
use App\Services\PollingUnit\SokotoSouth\SokotoSouthPollingUnits;
use App\Services\PollingUnit\Tambuwal\TambuwalPollingUnits;
use App\Services\PollingUnit\Tangaza\TangazaPollingUnits;
use App\Services\PollingUnit\Tureta\TuretaPollingUnits;
use App\Services\PollingUnit\Wamakko\WamakkoPollingUnits;
use App\Services\PollingUnit\Wurno\WurnoPollingUnits;
use App\Services\PollingUnit\Yabo\YaboPollingUnits;

class pollingUnits
{	
	function __construct($lga)
	{
		$this->pollingUnits = $this->getPollingUnits($lga);
	}
    
	protected function getPollingUnits($lga)
	{
		
		switch ($lga) {
			case 'Binji':
				$pollingUnits = new BinjiPollingUnits;
				break;
			case 'Bodinga':
				$pollingUnits = new BodingaPollingUnits;
				break;
			case 'Dange Shuni':
				$pollingUnits = new DangeShuniPollingUnits;
			break;
				case 'Gada':
				$pollingUnits = new GadaPollingUnits;
			    break;
			case 'Goronyo':
				$pollingUnits = new GoronyoPollingUnits;
				break;
			case 'Gudu':
				$pollingUnits = new GuduPollingUnits;
				break;
			case 'Gwadabawa':
				$pollingUnits = new GwadabawaPollingUnits;
				break;
			case 'Illela':
				$pollingUnits = new IllelaPollingUnits;
				break;
			case 'Isa':
				$pollingUnits = new IsaPollingUnits;
				break;
			case 'Kware':
				$pollingUnits = new KwarePollingUnits;
				break;
			case 'Kebbe':
				$pollingUnits = new KebbePollingUnits;
				break;
			case 'Rabah':
				$pollingUnits = new RabahPollingUnits;
				break;
			case 'Sabon Birni':
				$pollingUnits = new SabonBirniPollingUnits;
				break;
			case 'Shagari':
				$pollingUnits = new ShagariPollingUnits;
				break;
			case 'Silame':
				$pollingUnits = new SilamePollingUnits;
				break;
			case 'Sokoto North':
				$pollingUnits = new SokotoNorthPollingUnits;
				break;
			case 'Sokoto South':
				$pollingUnits = new SokotoSouthPollingUnits;
				break;
			case 'Tambuwal':
				$pollingUnits = new TambuwalPollingUnits;
				break;
			case 'Tangaza':
				$pollingUnits = new TangazaPollingUnits;
				break;
			case 'Tureta':
				$pollingUnits = new TuretaPollingUnits;
				break;
			case 'Wamakko':
				$pollingUnits = new WamakkoPollingUnits;
				break;
			case 'Wurno':
				$pollingUnits = new WurnoPollingUnits;
				break;
			case 'Yabo':
				$pollingUnits = new YaboPollingUnits;
				break;
			default:
				
				break;

		}
		return $pollingUnits;
	}


}