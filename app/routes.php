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

// Route::get('users', function(){
// 	$title = "My Users";
// 	return View::make('home.users')
// 		->with('title', $title);
// });

Route::post('/', function(){
	
	$input = Input::all();

	// raw query
	// DB::insert('insert into test2 (fname, lname) values(?, ?)', array($input['fname'], $input['lname'] ));

	$rules = array(
		'fname' => 'required',
		'lname' => 'required'
		);

	$messages = array(
		'fname.require' => 'A first name is required!!!',
		'lname.require' => 'A last name is required!!!'
		);

	$v = Validator::make($input, $rules, $messages);

	if($v->passes())
	{
		// Fluent
		DB::table('test2')->insert(array(
			'fname' => $input['fname'],
			'lname' => $input['lname']
			));

		return Redirect::to('/');
	}
	else
	{
		return Redirect::to('create')
			->withInput()
			->withErrors($v)
			->with('message');		
	}
});


Route::get('create', function() {
	$title = "Create Users";
	return View::make('home.create')
		->with('title', $title);	
});

Route::get('contacts', function() {

	$contacts = Contact::all();

	$title = "Contacts";
	return View::make('home.contacts')
		->with('contacts', $contacts)
		->with('title', $title);
});

Route::post('contacts', function() {

	$input = Input::all();

	$v = Validator::make($input, Contact::$rules, Contact::$messages);

	if($v->passes())
	{

		$contact = new Contact;
		$contact->fname = $input['fname'];
		$contact->lname = $input['lname'];
		$contact->state = $input['state'];
		$contact->region = $input['region'];

		$contact->save();

		return Redirect::to('contacts');
		
	}
	else
	{
		return Redirect::to('createContacts')
			->withInput()
			->withErrors($v)
			->with('message');	
	}

});

Route::get('createContacts', function() {
	$title = "Create Contacts";
	return View::make('home.createContacts')
		->with('title', $title);	
});

Route::get('posts', function(){
	
	$post = Post::find(1);

	$comments = Post::find(1)->comment;

	echo '<h2>'.$post->title.'</h2>';
	echo '<p>'.$post->body.'</p>';

	foreach ($comments as $c)
	{
		echo '<li>'.$c->comment.'</li>';
	}

	$title = "Posts";
	return View::make('home.posts')
		->with('title', $title);
});

// Route::resource('entries', 'EntriesController');