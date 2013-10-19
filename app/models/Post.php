<?php

class Post extends Eloquent
{
	protected $table = "posts";

	public function comment()
	{
		return $this->hasMany('Comment', 'post_id');
	}
}

// // get all posts
// $post = User::all()->posts;