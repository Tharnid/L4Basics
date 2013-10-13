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
	$title = "L4 Basics";
	return View::make('home.index')
		->with('title', $title);
});

Route::get('about', function(){
	$title = "About This";
	return View::make('home.about')
		->with('title', $title);
});

Route::get('users', function(){
	$title = "My Users";
	return View::make('home.users')
		->with('title', $title);
});

Route::post('users', function(){
	
		$input = Input::all();

	DB::insert('insert into test2 (fname, lname) values(?, ?)', array($input['fname'], $input['lname'] ));

	$title = "My Users";
	return View::make('home.users')
		->with('title', $title);
});