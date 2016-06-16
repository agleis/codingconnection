<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
	
	/**
     * The events this user is hosting.
     */
    public function events() {
		return $this->morphToMany('App\Event', 'host');
	}
	
	/**
     * The posts that have been posted by this group.
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
	
	/**
     * The posts that have been posted in this event.
     */
    public function postsOn()
    {
        return $this->morphToMany('App\Post', 'location');
    }
	
	/**
	 * The users who like this group
	 */
	public function users() {
		return $this->belongsToMany('App\User');
	}
	
	/**
	 * The users who administrate this group
	 */
	public function admins() {
		return $this->belongsToMany('App\User', 'group_admins');
	}
}
