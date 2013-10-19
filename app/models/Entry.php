<?php

class Entry extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'title' => 'required'
	);
}
