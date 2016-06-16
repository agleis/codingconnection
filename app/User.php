<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	/**
     * The events this user is hosting.
     */
    public function events_hosting() {
		return $this->morphToMany('App\Event', 'host');
	}
	
	/**
     * The events this user is attending or invited to or declined.
     */
    public function events() {
		return $this->belongsToMany('App\Event')->withPivot('status');
	}
	
	/**
     * The events this user is attending.
     */
    public function attending() {
		return $this->events->pivot->where('status', 1);
	}
	
	/**
     * The events this user is invited to.
     */
    public function invited() {
		return $this->events->pivot->where('status', 0);
	}
	
	/**
     * The events this user declined.
     */
    public function declined() {
		return $this->events->pivot->where('status', 2);
	}
	
	/**
     * The posts that have been posted by this user.
     */
    public function posts()
    {
        return $this->morphToMany('App\Post', 'actor');
    }
	
	/**
     * The posts that have been posted on this user's wall (includes self posts).
     */
    public function postsOn()
    {
        return $this->morphToMany('App\Post', 'location');
    }
	
	/**
     * The comments that have been posted by this user.
     */
    public function comments()
    {
        return $this->morphToMany('App\Comment', 'actor');
    }
	
	/**
	 * The messages sent by this user.
	 */
	public function messages() {
		return $this->hasMany('App\Message');
	}
	
	/**
	 * The group messages this user is in.
	 */
	public function group_messages() {
		return $this->belongsToMany('App\MessageGroup');
	}
	
	/**
	 * A list of this person's friends.
	 */
	public function friends() {
		return $this->belongsToMany('App\User', 'friends', 'user_id_1', 'user_id_2')->withTimestamps();
	}
	
	/**
	 * The groups this person is a part of.
	 */
	public function groups() {
		return $this->belongsToMany('App\Group');
	}
	
	/**
	 * The groups this person is admin of.
	 */
	public function groups_admin() {
		return $this->belongsToMany('App\Group', 'group_admins');
	}
}
