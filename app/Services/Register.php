<?php
namespace App\Services;
/**
* this class will generate all the data required for the applictaion
*/
use App\User;
use App\Lga;
use App\Ward;
use App\Result;
use App\Type;
use App\Center;
use App\Collation;
use App\PollingUnit;
use Illuminate\Support\Facades\Hash;

class Register
{
	
	function __construct($data)
	{
		$this->data = $data;
		$this->createInfo();

	}
    protected function getCollation($lga)
    {
    	switch ($lga->id) {
    		case '1':
    			return [1,2,7];
    			break;
    		case '2':
    			return [1,4,11];
    			break;
    		
    		case '3':
    			return [1,4,11];
    			break;
    		case '4':
    			return [1,3,13];
    			break;
    		case '5':
    			return [1,3,13];
    			break;
    		case '6':
    			return [1,2,8];
    			break;
    		case '7':
    			return [1,3,15];
    			break;
    		case '8':
    			return [1,8,15];
    			break;
    		case '9':
    			return [1,3,14];
    			break;
    		case '10':
    			return [1,2,9];
    			break;
    		case '11':
    			return [1,4,6];
    			break;
    		case '12':
    			return [1,3,12];
    			break;
    		case '13':
    			return [1,3,14];
    			break;
    		case '14':
    			return [1,4,10];
    			break;
    		case '15':
    			return [1,2,7];
    			break;
    		case '16':
    			return [1,2,5];
    			break;
    		case '17':
    			return [1,2,5];
    			break;
    		case '18':
    			return [1,4,9];
    			break;
    		case '19':
    			return [1,2,8];
    			break;
    		case '20':
    			return [1,4,11];
    			break;
    		case '21':
    			return [1,2,6];
    			break;
    		case '22':
    			return [1,3,12];
    			break;
    		case '23':
    			return [1,4,10];
    			break;
    		
    		default:
    			# code...
    			break;
    	}

    }
	protected function createInfo()
	{
			
		$collations = [
			'PRESIDENTIAL',
			'SOKOTO CENTRAL',
			'SOKOTO EAST', 
			'SOKOTO SOUTH',
            'SOKOTO NORTH / SOKOTO SOUTH',
            'WAMAKKO / KWARE',
            'SILAME / BINJI',
            'TANGAZA / GUDU',
            'TAMBUWAL / KEBBE',
            'YABO / SHAGARI',
            'BODINGA / DANGE SHUNI / TURETA',
            'WURNO / RABAH',
            'GORONYO / GADA',
            'SABON BIRNI / ISAH',
            'GWADABAWA / ILLELA'
		];

        foreach ($collations as $collation) {
        	$collation = Collation::create(['name'=>$collation]);
        	if($collation->id == 1){
        		$type_id = 1;
        	}elseif($collation->id == 2 || $collation->id == 3 || $collation->id == 4){
        		$type_id = 2;
        	}else{
        		$type_id = 3;
        	}
            $collation->resultCount()->create(['type_id'=>$type_id]);
        }
        $centers = [
            'SOKOTO CENTRAL',
			'SOKOTO EAST', 
			'SOKOTO SOUTH'
        ];
		foreach ($centers as $center) {
			$userCenter = Center::firstOrCreate(['name'=>$center]);
			$code = substr(md5($userCenter->id), 0, 8);
			$userCenter->user()->create([
                'email'=>$code.'@apc.com',
				'code'=>$code,
				'password'=>Hash::make($code)
			]);
		}

		$code = substr(md5('collation'),0, 8);
		User::create([
            'email'=>$code.'@apc.com',
			'code'=>$code,
			'password'=>Hash::make($code),
			'collation_id' => 1
			
		]);

		$type = ['PRESIDENTIAL','SENATORIAL','HOUSE OF REPS'];

        foreach ($type as $name) {
        	Type::create(['name'=>$name]);
        }

		foreach ($this->data as $data) {

			foreach ($data as $lga) {
               
				//create local government
				$local = Lga::create(['name'=>$lga['name']]);

                for ($i=1; $i <= 3 ; $i++) { 
                	$local->resultCounts()->create(['type_id'=>$i]);
                }
				//create the user if the local government
				$code = substr(md5($local->id.'l'),0, 8);
				$local->user()->create([
		            'email'=>$code.'@apc.com',
					'code'=>$code,
					'password'=>Hash::make($code),
				]);

				foreach ($lga['wards'] as $wards) {

					foreach ($wards as $ward) {

                        //register ward
                        $this_ward = Ward::create(['name'=>$ward['name'],'lga_id'=>$local->id]);

						foreach ($ward['pollingUnits'] as $pollingUnits) {
                            
							foreach ($pollingUnits as $pollingUnit) {
                                
                                //create polling unit 
								$agent = $this_ward->pollingUnits()->create(['name'=>$pollingUnit,'ward_id'=>$this_ward->id]);
								// create polling unit result with zero values
								    $collation = $this->getCollation($local);
									Result::create(['type_id'=>1,'polling_unit_id'=>$agent->id,'collation_id'=>$collation[0]]);
									Result::create(['type_id'=>2,'polling_unit_id'=>$agent->id,'collation_id'=>$collation[1]]);
									Result::create(['type_id'=>3,'polling_unit_id'=>$agent->id,'collation_id'=>$collation[2]]);
								
                         
								//create agent of the polling unit
								$agent->user()->create([
                                    'email'=>'a'.$this->agentCode($agent->id).'@apc.com',
									'code'=>'a'.$this->agentCode($agent->id),
									'password'=>Hash::make('a'.$this->agentCode($agent->id)),
		
								]);
							}

						}

					}
				}

			}

		}
	}

	protected function agentCode($code)
	{
		switch (strlen($code)) {
			case '1':
				$code = '000'.$code;
				break;
			case '2':
				$code = '00'.$code;
				break;
			case '3':
				$code = '0'.$code;
				break;
			
			default:
				$code = $code;
				break;
		}
        return $code;
	}
	
}