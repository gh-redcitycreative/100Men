<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $fillable = ['title', 'passcode', 'start_time', 'location', 'date'];
  	public function charities()
  	{
  		return $this->hasMany('App\Charity');
  	}
    
    public function currents()
    {
      return $this->hasMany('App\Current');
    }
  	
  	public function addCharity(Charity $charity)
  	{
  		return $this->charities()->save($charity);
  	}

    public function votes()
    {
        return $this->hasManyThrough('App\Vote', 'App\Charity');
    }
    public function checkin()
    {
        return $this->hasMany('App\Checkin');
    }
    
  
}
