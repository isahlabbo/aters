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
    public function index()
    {

        return view('home',['user'=>Auth()->User()]);
    }

    public function accredited(Request $request)
    {
        Auth()->User()->pollingUnit->update(['votes'=>$request->votes]);
        session()->flash('message','Acredited voters was sent successfully');
        return redirect('/home');
    }
    public function result(Request $request)
    {

        Auth()->User()->pollingUnit->result->update([
            'pdp'=>$request->pdp,
            'apc'=>$request->apc,
            'other'=>$request->other,
            'valid_vote'=>$request->valid_vote,
            'invalid_vote'=>$request->invalid_vote
        ]);

        session()->flash('message','Election result was sent successfully');
        return redirect('/home');
    } 
    
}
