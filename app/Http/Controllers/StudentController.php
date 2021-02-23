<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function display($sdate)
    {
    	return view('stdate')->with('sdate',$sdate);
    }
    public function display2($age)
    {
    	return view('stage?,compact('age')');
    }
}
