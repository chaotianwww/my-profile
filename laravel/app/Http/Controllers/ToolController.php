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
			return failed();
		}

		$data['val']  =  $val;
		switch($type){
			case 'md5':
				$data['val'] = md5($val);
				break;
			case 'sha1':
				$data['val'] = sha1($val);
				break;
			case 'json_encode':
				$data['val'] = json_encode($val);
				break;
			case 'json_decode':
				$data['val'] = json_decode($val);
				break;
			case 'url_encode':
				$data['val'] = urlencode($val);
				break;
			case 'url_decode':
				$data['val'] = urldecode($val);
				break;
			case 'base64encode':
				$data['val'] = base64_encode($val);
				break;
			case 'base64decode':
				$data['val'] = base64_decode($val);
				break;
			case 'timetostr':
				$data['val'] = strtotime($val);
				break;
			case 'strtotime':
				$data['val'] = date("Y-m-d H:i:s",$val);
				break;
		}

		return success($data);
	}
}
