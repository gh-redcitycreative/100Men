<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{
    public function current()
	{
	   	return $this->belongsTo('App\Current');
	}
	public function user()
    {
    	return $this->belongsTo(User::class);
    }

}
