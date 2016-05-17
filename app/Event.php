<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $fillable = ['title', 'passcode', 'event_date', 'start_time', 'location'];
  	public function charities()
  	{
  		return $this->hasMany('App\Charity');
  	}
  	
  	public function addCharity(Charity $charity)
  	{
  		return $this->charities()->save($charity);
  	}
}
