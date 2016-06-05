<?php

namespace App;

use \App\User;
use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{
    public function event()
	{
	   	return $this->belongsTo('App\Event');
	}
	public function users()
    {
    	return $this->belongsToMany('App\User');
    }

}
