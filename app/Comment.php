<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
	 * The actor that posted this comment.
	 *
	 */
	public function actor() {
		return $this->morphTo();
	}
	
	/*
	 * The location of this comment
	 *
	 */
	public function post() {
		return $this->belongsTo('App\Post');
	}
}
