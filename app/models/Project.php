<?php

class Project extends \Eloquent {
	protected $fillable = ['user_id', 'name','description', 'image', 'views'];



	public function getImage() {
		return asset('uploads').'/'.$this->image;
	}

	public function user() {
		return $this->belongsTo('User');
	}

	public function ups()
	{
		return $this->hasMany('Up');
	}

	public function upsCount()
	{
		return $this->ups()->count();
	}

	public function description()
	{
		return nl2br($this->description);
	}
}