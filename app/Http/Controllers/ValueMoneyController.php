<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValueMoneyController extends Controller
{
    //
    public function index(Request $request){
    	$money = $request->input('money');
    	$year = $request->input('year');
    	$rate = $request->input('rate');

    	$amount = $money*pow((1 + ($rate/100)),$year);

    	return view('value')->with('val',$amount);
    }
}
