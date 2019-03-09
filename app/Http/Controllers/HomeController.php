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
    public function getGovernatorialResult()
    {   
        $pdp = 0;
        $apc = 0;
        $other = 0;
        $invalid = 0;
        $valid = 0;
        $registered = 0;
        $acredited = 0;
        
        for ($i=1; $i <=23 ; $i++) {
            $lga = Lga::find($i)->returnGovernor(); 
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

            $lga = Lga::find($data)->assembly(); 
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
                $assembly = [
                    ['name'=>'BINJI','result'=>$this->getGovernatorialResult(['1'])],
                    ['name'=>'BODINGA','result'=>$this->getGovernatorialResult(['2'])],
                    ['name'=>'DANGE SHUNI','result'=>$this->getGovernatorialResult(['3'])],
                    ['name'=>'GADA','result'=>$this->getGovernatorialResult(['4'])],
                    ['name'=>'GORONYO','result'=>$this->getGovernatorialResult(['5'])],
                    ['name'=>'GUDU','result'=>$this->getGovernatorialResult(['6'])],
                    ['name'=>'GWADABAWA','result'=>$this->getGovernatorialResult(['7'])],
                    ['name'=>'ILLELA','result'=>$this->getGovernatorialResult(['8'])],
                    ['name'=>'ISA','result'=>$this->getGovernatorialResult(['9'])],
                    ['name'=>'KEBBE','result'=>$this->getGovernatorialResult(['10'])],
                    ['name'=>'KWARE','result'=>$this->getGovernatorialResult(['11'])],
                    ['name'=>'RABAH','result'=>$this->getGovernatorialResult(['12'])],
                    ['name'=>'SABON BIRNI','result'=>$this->getGovernatorialResult(['13'])],
                    ['name'=>'SHAGARI','result'=>$this->getGovernatorialResult(['14'])],
                    ['name'=>'SILAME','result'=>$this->getGovernatorialResult(['15'])],
                    ['name'=>'SOKOTO NORTH','result'=>$this->getGovernatorialResult(['16'])],
                    ['name'=>'SOKOTO SOUTH','result'=>$this->getGovernatorialResult(['17'])],
                    ['name'=>'TAMBUWAL','result'=>$this->getGovernatorialResult(['18'])],
                    ['name'=>'TANGAZA','result'=>$this->getGovernatorialResult(['19'])],
                    ['name'=>'TURETA','result'=>$this->getGovernatorialResult(['20'])],
                    ['name'=>'WAMAKKO','result'=>$this->getGovernatorialResult(['21'])],
                    ['name'=>'WURNO','result'=>$this->getGovernatorialResult(['22'])],
                    ['name'=>'YABO','result'=>$this->getGovernatorialResult(['23'])],
                ];
               
                $governatorial = ['name'=>'GOVERNATORIAL','result'=>$this->getGovernatorialResult()];
                return view('home',['assembly'=>$assembly,'governatorial'=> $governatorial, 'user'=>Auth()->User()]);
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
