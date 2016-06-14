<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * The group this message belong to.
     */
    public function group()
    {
        return $this->belongsTo('App\MessageGroup');
    }
	
	/**
     * The user that posted this message.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
