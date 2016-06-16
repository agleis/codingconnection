<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	define("INVITED", 0);
	define("ATTENDING", 1);
	define("DECLINED", 2);
	
    /**
     * The users that are involved with this event.
     */
    public function users()
    {
        return $this->belongsToMany('App\User')->withPivot('status');
    }
	
	/**
	 * The users that are attending this event.
	 */
	public function attending() {
		return $this->users->pivot->where('status', ATTENDING);
	}
	
	/**
	 * The users that are invited to this event.
	 */
	public function invited() {
		return $this->users->pivot->where('status', INVITED);
	}
	
	/**
	 * The users that declined this event.
	 */
	public function declined() {
		return $this->users->pivot->where('status', DECLINED);
	}
	
	/**
     * The host of this event.
     */
    public function host()
    {
        return $this->morphTo();
    }
	
	/**
     * The posts that have been posted by this event.
     */
    public function posts()
    {
        return $this->morphToMany('App\Post', 'actor');
    }
	
	/**
     * The comments that have been posted by this group.
     */
    public function comments()
    {
        return $this->morphToMany('App\Comment', 'actor');
    }
    }
	
	/**
     * The posts that have been posted in this event.
     */
    public function postsOn()
    {
        return $this->morphToMany('App\Post', 'location');
    }
}
