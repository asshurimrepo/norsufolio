<?php

class Follow extends \Eloquent {
	protected $fillable = ['followee_id', 'followed_id'];
	protected $table = 'follows';
}