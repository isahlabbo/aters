<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Incidence;

class IncidenceController extends Controller
{

    public function editIncidence(Request $request)
    {
    	if(isset($request->id)){
    		return view('edit_incidence',['incidence'=>Incidence::find($request->id)]);
    	}
    }

    public function resolveIncidence(Request $request)
    {
    	if(isset($request->id)){
            Incidence::find($request->id)->update(['resolve'=>1]);
    	}
    	
    	return redirect('/home');
    }
}
