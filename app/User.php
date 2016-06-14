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
     * The host ID of this user.
     */
    public function host()
    {
        return $this->belongsTo('App\Host');
    }
	
	/**
     * The posts of this user.
     */
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
