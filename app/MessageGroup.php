<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessageGroup extends Model
{
    /**
     * The message of this group.
     */
    public function messages()
    {
        return $this->hasMany('App/Messages');
    }
	
	/**
     * The users in this group.
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
