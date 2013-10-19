<?php 
	
class RegUser extends Eloquent
{
	// contacts
	// id

	protected $table = 'contacts'; 

	public $timestamps = false;

	public static $rules = array(

		'fname' => 'required',
		'lname' => 'required',
		'state' => 'required',
		'region' => 'required'
		);

		public static $messages = array(
		'fname.require' => 'A first name is required!!!',
		'lname.require' => 'A last name is required!!!',
		'state.require' => 'A state is required!!!',
		'region.require' => 'A region is required!!!'
		);

		public function posts()
		{
			return hasMany('posts');
		}
}