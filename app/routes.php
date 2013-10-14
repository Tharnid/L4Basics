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
	
	$users = DB::table('test2')->get();

	$title = "L4 Basics";
	return View::make('home.index')->with('users', $users)
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

	// raw query
	// DB::insert('insert into test2 (fname, lname) values(?, ?)', array($input['fname'], $input['lname'] ));

	// Fluent
	DB::table('test2')->insert(array(
		'fname' => $input['fname'],
		'lname' => $input['lname']
		));

	$rules = array(
		'fname' => 'required',
		'lname' => 'required'
		);

	$messages = array(
		'fname.require' => 'A first name is required!!!',
		'lname.require' => 'A last name is required!!!'
		);

	$title = "My Users";
	return View::make('home.users')
		->with('title', $title);
});

Route::get('allusers', function() {
	$user = DB::table('test2')->get();
	var_dump($user);

	$title = "All Users";
	return View::make('home.allusers')
		->with('title', $title);
});

Route::get('create', function() {
	$title = "Create Users";
	return View::make('home.create')
		->with('title', $title);	
});