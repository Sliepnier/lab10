<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmptyController extends Controller
{
    
    public function test($id, $name){
    	return [
    			'id' => $id,
    			'name' => $name
    	];
    }
}
