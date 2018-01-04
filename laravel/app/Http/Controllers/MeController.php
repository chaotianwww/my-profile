<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeController extends Controller
{
    //
	public function intro()
	{
		return view('sub-page.me.intro');
	}
	
	public function game_v1()
	{
		$row = 100;
		$col = 100;
		for($i = 0 ;$i < $row; $i++){
			for($j = 0; $j < $i; $j++){
				echo $j%2?'': '*';
			}
			echo '<br/>';
		}
	}
}
