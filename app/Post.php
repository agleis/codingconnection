<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
	 * The actor that posted this post.
	 *
	 */
	public function actor() {
		return $this->morphTo();
	}
	
	/*
	 * The location of this post
	 *
	 */
	public function location() {
		return $this->morphTo();
	}
	
	/*
	 * The comments on this post
	 *
	 */
	public function comments() {
		return $this->hasMany('App\Comment');
	}
}
