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
    public function index()
    {
        if(Auth()->User()->center_id != null){
            $lgas = [];
            foreach ($this->getLgas() as $lga) {
                $lgas[] = Lga::find($lga);
            }
            return view('home',['user'=>Auth()->User(),'lgas'=>$lgas,'availableIncidence'=>$this->availableIncidences()]);
        }elseif(Auth()->User()->collation_id == 1){
            $representative = [
                ['name'=>'SOKOTO NORTH / SOKOTO SOUTH','result'=>ResultCount::find(5)],
                ['name'=>'WAMAKKO / KWARE','result'=>ResultCount::find(6)],
                ['name'=>'SILAME / BINJI','result'=>ResultCount::find(7)],
                ['name'=>'TANGAZA / GUDU','result'=>ResultCount::find(8)],
                ['name'=>'TAMBUWAL / KEBBE','result'=>ResultCount::find(9)],
                ['name'=>'YABO / SHAGARI','result'=>ResultCount::find(10)],
                ['name'=>'BODINGA / DANGE SHUNI / TURETA','result'=>ResultCount::find(11)],
                ['name'=>'WURNO / RABAH','result'=>ResultCount::find(12)],
                ['name'=>'GORONYO / GADA','result'=>ResultCount::find(13)],
                ['name'=>'SABON BIRNI / ISAH','result'=>ResultCount::find(14)],
                ['name'=>'GWADABAWA / ILLELA','result'=>ResultCount::find(15)]
            ];
            $senatorial = [
                ['name'=>'SOKOTO CENTRAL','result'=>ResultCount::find(2)],
                ['name'=>'SOKOTO EAST','result'=>ResultCount::find(3)],
                ['name'=>'SOKOTO SOUTH','result'=>ResultCount::find(4)],
            ];
            $presidential = ['name'=>'PRESIDENTIAL','result'=>ResultCount::find(1)];
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
    public function incidence(Request $request, Incidence $incidence)
    {
        $new_incidence = $incidence->firstOrCreate(['name'=>$request->incidence]);
        $poll = $new_incidence->pollingUnitIncidences()->create(['polling_unit_id'=>Auth()->User()->polling_unit_id, 'incidence_id'=>$new_incidence->id]);
        session()->flash('message','The was sent successfully');
        return redirect('/home');
    }

}
