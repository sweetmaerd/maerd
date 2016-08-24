<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/id/{id?}', function($id = 0) {
	echo 'user '.$id;
})->where('id', '[0-9]+');*/

//Route::controller('/test/{id?}', 'TestController@getProfile');

//Route::controllers(['test'=>'TestController@getProfile',
					//'name'=>'NameController',
//]);




Route::get('/', function () {
    return view('welcome');
});


