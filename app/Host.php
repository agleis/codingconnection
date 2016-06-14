<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Host extends Model
{
    /**
     * The host of this event.
     */
    public function host()
    {
        if($this->type == 0) return $this->belongsTo('App\User');
		if($this->type == 1) return $this->belongsTo('App\Group');
    }
	
	/**
     * The events this host is hosting.
     */
    public function events()
    {
        return $this->hasMany('App\Event');
    }
}
