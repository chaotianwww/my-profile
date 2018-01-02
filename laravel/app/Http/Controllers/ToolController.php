<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolController extends Controller
{
    //
	public function getVal(Request $request)
	{
		$val = $request->get("val","");
		$type = $request->get("type","");
		if(!$val || !$type){
			return [1,'params error'];
		}

		return [];
	}
}
