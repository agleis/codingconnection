<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The users that will be attending this event.
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
	
	/**
     * The host of this event.
     */
    public function host()
    {
        return $this->belongsTo('App\Host');
    }
	
	/**
     * The posts of this event.
     */
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
