<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ward;
class CollationController extends Controller
{
    public function wardCollation()
    {
    	return view('Dashboards.federal',['count'=>1,'wards'=>Ward::all()]);
    }
}
