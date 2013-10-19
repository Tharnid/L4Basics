<?php 

class Comment extends Eloquent
{
	protected $table = "comments";

	public function posts()
	{
		return $this->belongsTo('Post');
	}
}