<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollationController extends Controller
{
    public function wardCollation()
    {
    	return view('Dashborads.federal',['wards'=>Ward::all()]);
    }
}
