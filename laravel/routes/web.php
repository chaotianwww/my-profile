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
	Route::get( '/' , function () {
		return view( 'index' );
	} );
	Route::group( [ 'prefix' => 'me' ] , function () {

		Route::get( 'tool' , function () {
			return view( 'sub-page.tool' );
		} );

		Route::get('/','MeController@intro');

	});
	Route::group( [ 'prefix' => 'travel' ] , function () {

		Route::get( 'shanghai' , 'TravelController@shanghai' );

	});

