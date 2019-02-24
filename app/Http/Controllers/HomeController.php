<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ward;
use App\Lga;
use App\PollingUnit;
use App\Incidence;
use App\Result;
use App\ResultCount;
use App\LgaResultCount;
use App\Http\Requests\RegisteredFormRequest;
use App\Http\Requests\AcreditedFormRequest;
use App\Services\Collation\Presidential;
use App\Services\Collation\Senatorial;
use App\Services\Collation\Representative;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function centerLga($lgas)
    {
        $lga = [];
        foreach($lgas as $this_lga){
            $lga[] = $this_lga;
        }
        return $lga;
    }
    protected function localSummary()
    {
        if(Auth()->User()->lga_id != null){
            
            return [
                'presidential' => LgaResultCount::where(['lga_id'=>Auth()->User()->lga_id,'type_id'=>1])->get(),
                'senatorial' => LgaResultCount::where(['lga_id'=>Auth()->User()->lga_id,'type_id'=>2])->get(),
                'representative' => LgaResultCount::where(['lga_id'=>Auth()->User()->lga_id,'type_id'=>3])->get(),
            ];
        }else{
            return [];
        }
    }
    protected function availableIncidences($value='')
    {    $count = 0;
        
        foreach($this->getLgas() as $id){
            $lga = Lga::find($id);
            foreach($lga->wards as $ward){
                foreach ($ward->pollingUnits as $pollingUnit) {
                    foreach ($pollingUnit->pollingUnitIncidences as $pollingUnitIncidence) {
                        if($pollingUnitIncidence->incidence->resolve == 0){
                           $count ++;
                        }
                    }
                }
            }
        }
        return $count;
    }
    protected function getLgas()
    {
        switch (Auth()->User()->center_id) {
            case '1':
                return [
                    '16',
                    '17',
                    '21',
                    '11',
                    '15',
                    '1',
                    '19',
                    '6'
                ];
                break;
            case '2':
                return [
                    '7',
                    '8',
                    '4',
                    '22',
                    '12',
                    '5',
                    '13',
                    '9'
                ];
                break;
            
            default:
                return [
                    '2', 
                    '3', 
                    '20', 
                    '14', 
                    '23', 
                    '18', 
                    '10' 
                ];
                break;
        }
    }
    public function getPresidentialResult()
    {   
        $pdp = 0;
        $apc = 0;
        $other = 0;
        $invalid = 0;
        $valid = 0;
        $registered = 0;
        $acredited = 0;
        
        for ($i=1; $i <=23 ; $i++) {
            $lga = Lga::find($i)->presidential(); 
            $pdp = $pdp + $lga['pdp'];
            $apc = $apc + $lga['apc'];
            $other = $other + $lga['other'];
            $valid = $valid + $lga['valid'];
            $invalid = $invalid + $lga['invalid'];
            $registered = $registered + $lga['registered'];
            $acredited = $acredited + $lga['acredited'];
        }  
           
     
        return [
            'pdp' => $pdp,
            'apc' => $apc,
            'other' => $other,
            'invalid' => $invalid,
            'valid' => $valid,
            'acredited' => $acredited,
            'registered' => $registered
        ];
    }
    public function getSenatorialResult($datas)
    {   
        $pdp = 0;
        $apc = 0;
        $other = 0;
        $invalid = 0;
        $valid = 0;
        $registered = 0;
        $acredited = 0;
        
        foreach ($datas as $data) {
            $lga = Lga::find($data)->senatorial(); 
            $pdp = $pdp + $lga['pdp'];
            $apc = $apc + $lga['apc'];
            $other = $other + $lga['other'];
            $valid = $valid + $lga['valid'];
            $invalid = $invalid + $lga['invalid'];
            $registered = $registered + $lga['registered'];
            $acredited = $acredited + $lga['acredited'];
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
    public function getRepresentativeResult($datas)
    {   
        $pdp = 0;
        $apc = 0;
        $other = 0;
        $invalid = 0;
        $valid = 0;
        $registered = 0;
        $acredited = 0;
        
        foreach ($datas as $data) {

            $lga = Lga::find($data)->representative(); 
            $pdp = $pdp + $lga['pdp'];
            $apc = $apc + $lga['apc'];
            $other = $other + $lga['other'];
            $valid = $lga['valid'];
            $invalid = $lga['invalid'];
            $registered = $lga['registered'];
            $acredited = $lga['acredited'];
          
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
    public function index()
    {
        if(Auth()->User()->federal == 1){
             return redirect('/ward_collation');
        }else{
            if(Auth()->User()->ward_id !=null){
                 return view('home',['user'=>Auth()->User()]);
            }else if(Auth()->User()->center_id != null){
                $lgas = [];
                foreach ($this->getLgas() as $lga) {
                    $lgas[] = Lga::find($lga);
                }
                return view('home',['user'=>Auth()->User(),'lgas'=>$lgas,'availableIncidence'=>$this->availableIncidences()]);
            }elseif(Auth()->User()->collation_id == 1 || Auth()->User()->collation_id == 2){
                $representative = [
                    ['name'=>'SOKOTO NORTH / SOKOTO SOUTH','result'=>$this->getRepresentativeResult(['16','17'])],
                    ['name'=>'WAMAKKO / KWARE','result'=>$this->getRepresentativeResult(['11','21'])],
                    ['name'=>'SILAME / BINJI','result'=>$this->getRepresentativeResult(['1','15'])],
                    ['name'=>'TANGAZA / GUDU','result'=>$this->getRepresentativeResult(['6','19'])],
                    ['name'=>'TAMBUWAL / KEBBE','result'=>$this->getRepresentativeResult(['10','18'])],
                    ['name'=>'YABO / SHAGARI','result'=>$this->getRepresentativeResult(['14','23'])],
                    ['name'=>'BODINGA / DANGE SHUNI / TURETA','result'=>$this->getRepresentativeResult(['2','3','20'])],
                    ['name'=>'WURNO / RABAH','result'=>$this->getRepresentativeResult(['12','22'])],
                    ['name'=>'GORONYO / GADA','result'=>$this->getRepresentativeResult(['4','5'])],
                    ['name'=>'SABON BIRNI / ISA','result'=>$this->getRepresentativeResult(['9','13'])],
                    ['name'=>'GWADABAWA / ILLELA','result'=>$this->getRepresentativeResult(['7','8'])]
                ];
                $senatorial = [
                    ['name'=>'SOKOTO CENTRAL','result'=>$this->getSenatorialResult(['16',
                    '17',
                    '21',
                    '11',
                    '15',
                    '1',
                    '19',
                    '6'])],
                    ['name'=>'SOKOTO EAST','result'=>$this->getSenatorialResult([
                    '7',
                    '8',
                    '4',
                    '22',
                    '12',
                    '5',
                    '13',
                    '9'
                ])],
                    ['name'=>'SOKOTO SOUTH','result'=>$this->getSenatorialResult([
                    '2', 
                    '3', 
                    '20', 
                    '14', 
                    '23', 
                    '18', 
                    '10' 
                ])],
                ];
               
                $presidential = ['name'=>'PRESIDENTIAL','result'=>$this->getPresidentialResult()];
                return view('home',['representative'=>$representative,'presidential'=> $presidential,'senatorial'=>$senatorial, 'user'=>Auth()->User()]);
            }else{
                $submitted = true;
                if(Auth()->user()->lga_id == null){
                    $pollingUnits = null;
                    $registered = null;
                    foreach(Auth()->user()->pollingUnit->results as $result){
                        if($result->apc == 0){
                            $submitted = false; 
                        }
                    }
                }else{
                    $unit = 0;
                    $register = 0;
                    foreach(Auth()->user()->lga->wards as $ward){
                        $unit = $unit + count($ward->pollingUnits);
                        foreach($ward->pollingUnits as $pollingUnit){
                            $register = $register + $pollingUnit->registered;
                        }
                    }
                    $pollingUnits = $unit;
                    $registered = $register;
                }

                return view('home',['submitted'=>$submitted,'register'=>$registered,'pollingUnits'=>$pollingUnits,'user'=>Auth()->User(),'summary'=>$this->localSummary()]);
            }
        }
         
    }
    
    public function accredited(AcreditedFormRequest $request)
    {
        
        Auth()->User()->pollingUnit->update(['acredited'=>$request->acredited]);
       
        session()->flash('message','Acredited voters was sent successfully');
        return redirect('/home');
    }

    public function registered(RegisteredFormRequest $request)
    {
        Auth()->User()->pollingUnit->update(['registered'=>$request->registered]);
        session()->flash('message','registered voters was sent successfully');
        return redirect('/home');
    }

    
    public function newResult(Request $request)
    {
        return view('new_result',['id'=>$request->id]);
    }
    

}
