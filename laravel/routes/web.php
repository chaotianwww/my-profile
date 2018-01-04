<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
	Route::get( '' , function () {
		return view( 'index' );
	} );
	Route::group( [ 'prefix' => 'me' ] , function () {

		Route::get('/','MeController@intro');
		
		Route::get('game/1','MeController@game_v1');
	});
	Route::group( [ 'prefix' => 'tool' ] , function () {
		Route::get( '/' , function () {
			return view( 'sub-page.tool.tool' );
		} );
		Route::post('getVal','ToolController@getVal');

		Route::get('php/frame',function()
		{
			return view('sub-page.tool.frame');
		});
	});


	Route::group( [ 'prefix' => 'travel' ] , function () {

		Route::get( 'shanghai' , 'TravelController@shanghai' );

	});

