<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('main');
});

Route::get('/tubes/public', function()
{
	return View::make('main');
});

Route::get('/register', function()
{
	if (Session::get('username')==null){
		return View::make('regis');	
	}else{
		return Redirect::to('/');
	}
	
});
Route::post('/register/validate', 'UserController@validateReg');

Route::get('/login/resetpassword',function(){
	return View::make('resetpassword');
});
Route::post('/login/resetpassword/val', 'UserController@validateReset');


Route::get('/login', function()
{
	if (Session::get('username')==null){
		return View::make('login');	
	}else{
		return Redirect::to('/');
	}
});
Route::post('/login/validate', 'UserController@validateLog');

Route::get('/logout',function(){
	Session::forget('username');
	return Redirect::to('/');
});

Route::get('/contact',function(){
	return View::make('contact');
});

Route::get('/donate', 'CharityController@popularCharity');
Route::get('/donate/seeall', 'CharityController@seeall');


Route::get('/shortcodes',function(){
	return View::make('shortcodes');
});

Route::get('/profil','UserController@profil');
Route::post('/profil/update', 'UserController@profilupdate');

Route::get('/startcharity',function(){
	if (Session::get('username')==null) return Redirect::to('/login');	
	return View::make('startcharity');
});
Route::post('/startcharity/create','UserController@startcharity');

Route::get('/donateext',function(){
	if (Session::get('username')==null) return Redirect::to('/login');
	return View::make('donateext');
}); 

Route::post('/yourcharity/editcharity','CharityController@viewcharity');
Route::post('/yourcharity/editcharity/update','CharityController@charityedit');

Route::get('/donate/yourcharity',function(){
	if (Session::get('username')==null) return Redirect::to('/login');
	return View::make('yourcharity');
}); 

Route::get('/donate/donated',function(){
	if (Session::get('username')==null) return Redirect::to('/login');
	return View::make('donated');
}); 

Route::get('/donate/statusdonation','CharityController@getDonatur');

Route::get('/donate/donated','CharityController@getDonated');

Route::get('/home/rules',function(){
	return View::make('rules');
}); 

Route::get('/ownersite',function(){
	return View::make('ownercharity');
}); 
Route::get('/charity/{id}', 'CharityController@showCharity');
Route::get('/donate/yourcharity', 'CharityController@yourCharity');

Route::post('/charity/donating','CharityController@donating');


Route::get('/donate/approve/{cid}/{did}', 'CharityController@approved');

?>