<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ward;
use App\Lga;
use App\PollingUnit;
use App\Result;
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
            $acredited = 0;
            $pdp = 0;
            $apc = 0;
            $valid_vote = 0;
            $invalid_vote = 0;
            $other = 0;
            foreach(Auth()->User()->lga->wards as $ward){
                foreach ($ward->pollingUnits as $pollingUnit) {
                    $acredited = $acredited + $pollingUnit->votes;
                    $pdp = $pdp + $pollingUnit->result->pdp;
                    $apc = $apc + $pollingUnit->result->apc;
                    $valid_vote = $valid_vote + $pollingUnit->result->valid_vote;
                    $invalid_vote = $invalid_vote + $pollingUnit->result->invalid_vote;
                    $other = $other + $pollingUnit->result->other;
                    
                }
            }
            return [
                'acredited' => $acredited,
                'pdp' => $pdp,
                'apc' => $apc,
                'valid_vote' => $valid_vote,
                'invalid_vote' => $invalid_vote,
                'other' => $other
            ];
        }else{
            return [];
        }
    }

    public function index()
    {
        return view('home',['user'=>Auth()->User(),'summary'=>$this->localSummary()]);
    }
    
    public function accredited(Request $request)
    {
        Auth()->User()->pollingUnit->update(['votes'=>$request->votes]);
        session()->flash('message','Acredited voters was sent successfully');
        return redirect('/home');
    }
    public function result(Request $request)
    {
        if(isset($request->id)){
            $result = PollingUnit::find($request->id)->result->update([
            'pdp'=>$request->pdp,
            'apc'=>$request->apc,
            'other'=>$request->other,
            'valid_vote'=>$request->valid_vote,
            'invalid_vote'=>$request->invalid_vote
        ]);
        }else{
            $result = Auth()->User()->pollingUnit->result->update([
                'pdp'=>$request->pdp,
                'apc'=>$request->apc,
                'other'=>$request->other,
                'valid_vote'=>$request->valid_vote,
                'invalid_vote'=>$request->invalid_vote
            ]);
        }
        
    
        session()->flash('message','Election result was sent successfully');
        return redirect('/home');
    }

    public function newResult(Request $request)
    {
        return view('new_result',['id'=>$request->id]);
    }

}
