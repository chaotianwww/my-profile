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
}
