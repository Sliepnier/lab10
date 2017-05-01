<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MoneyValueController extends Controller
{
    //
    public function Calculate($money,$year,$rate){
    	return [
    		'amount' =>  $money*pow((1 + ($rate/100)),$year),
    		'year' => $year,
    		'rate' => $rate
    	];
    }
}
