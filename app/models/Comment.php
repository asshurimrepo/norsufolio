<?php

class Comment extends \Eloquent {
	protected $fillable = ['user_id', 'project_id', 'comment'];
	protected $appends = ['posted_on'];

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function getPostedOnAttribute()
	{
		return $this->created_at->diffForHumans();
	}
}